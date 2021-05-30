

/**
 * [Description carousel]
 * @author sylla ibrahim <s67986601@gmail.com>
 * 
 * elle permet de cree un carousel avec param:
 *    -le ul  <le ul doit etre dans un main ce main la meme doit etre dans un div>
 *    -les li <le li doit etre des enfant du li>
 *    -le btnNext <le btn qui permet de faire avancer le carousel peut import sa position>
 *    -le btnprev <pareli que le btnNext mais celui si faire reculer>
 */
class carousel {
    /**
     * 
     * @param {DOM} _carouselMain     - element qui contient tous par les child : par defaut la balise ul
     * @param {DOM} _carouselAllChild - tous les enfant les du carousel : par default les li
     * @param {DOM} _carouselNextBtn - le btn qui sert pour faire avancer le carousel 
     * @param {DOM} _carouselPrevBtn - le btn qui sert a faie reculer le carousel
     */
    constructor(
        _carouselMain,
        _carouselAllChild,
        _carouselNextBtn,
        _carouselPrevBtn,
        _carouselSelectorElement
    ) {
        this.carouselMAin = _carouselMain;
        this.carouselAllChild = _carouselAllChild;
        this.carouselNextBtn = _carouselNextBtn;
        this.carouselPrevBtn = _carouselPrevBtn;
        this.carouselSelectorElement = _carouselSelectorElement;

        this.numberElement = this.carouselAllChild.length; // number element in carousel
        this.compteurOfCarousel = 0; // le compteur par default du carousel
        this.getTimeForCarousel = 10000; // le temps que le carousel doit prendre 
    }

    /**
     * 
     * @param {number} _time - modification du temps de changement du carousel 
     */
    setTimeForCarousel(_time) {
        this.getTimeForCarousel = _time;
    }



    /**
     * 
     * @returns {number} la largeur d'un element du carousel
     */
    widthElement() {
        return this.carouselAllChild[0].offsetWidth;
    }


    /**
     * @return {rien} il retourn rien mais il faire avancer les element
     */
    nextAuto() {
        this.compteurOfCarousel += this.widthElement();
        if (this.compteurOfCarousel >= (this.widthElement() * this.numberElement)) {
            this.compteurOfCarousel = 0;
        }
        this.move(this.compteurOfCarousel);
    }


    /**
     * @description uutliser pour le btn next du carousel
     */
    btnNext() {
        this.carouselNextBtn.addEventListener('click', () => {
            this.compteurOfCarousel += this.widthElement();
            if (this.compteurOfCarousel >= (this.widthElement() * this.numberElement)) {
                this.compteurOfCarousel = 0;
            }
            this.move(this.compteurOfCarousel);
            console.log("ok");
        })
    }


    /**
     * @description utliser pour le btn prev du carousel
     */
    btnPrev() {
        this.carouselPrevBtn.addEventListener('click', () => {
            this.compteurOfCarousel -= this.widthElement();
            if (this.compteurOfCarousel < 0) {
                this.compteurOfCarousel = 0;
            }
            this.move(this.compteurOfCarousel);
        })
    }

    /**
     *  @description il ajoute les seletor element en fonction du nombre image
     */
    addSelectorElement() {
        let compt = this.numberElement;
        let element = undefined;
        for (let i = 0; i < compt; i++) {
            element = document.createElement('li');
            element.classList.add(`selector${i}`);
            this.carouselSelectorElement.append(element);
        }
    }

    /**
     * @description on ajoute des event sur tous les selector element
     */
    effetInSelectorElement() {
        this.addSelectorElement();
        let children = this.carouselSelectorElement.children;
        for (let i = 0; i < children.length; i++) {
            const element = children[i];
            element.addEventListener('click', (e) => {
                let childrenElement = (parseInt(element.className.split('selector')[1]));
                this.compteurOfCarousel = (this.widthElement() * childrenElement);
                this.move(this.compteurOfCarousel);
            })

        }
    }

    /**
     * 
     * @param {widthOfTranslateCarousel} _widthcompteurOfCarousel - pour pourvoir bouger seule 
     */
    autoMovingSelectorElement(_widthcompteurOfCarousel) {
        let childrenElementIndex = (_widthcompteurOfCarousel / this.widthElement());
        let children = this.carouselSelectorElement.children;
        for (let index = 0; index < children.length; index++) {
            const element = children[index];
            let childrenElement = (parseInt(element.className.split('selector')[1]));
            if (childrenElement === childrenElementIndex) {
                element.style.backgroundColor = '#63b0f4';
            } else if (childrenElement !== childrenElementIndex) {
                element.style.backgroundColor = '#fff';

            }
        }
    }


    /**
     * 
     * @param {number} _widthcompteurOfCarousel - la largeur qui'il a besion pour faire bouger le carousel 
     */
    move(_widthcompteurOfCarousel) {
        this.autoMovingSelectorElement(_widthcompteurOfCarousel);
        this.carouselMAin.style.transform = `translate(-${_widthcompteurOfCarousel}px)`;
        // console.log(childrenElement);
    }

    /**
     * @description le pilier le la class c'est que tous les methode fusionne
     */
    execute() {
        this.btnNext();
        this.btnPrev();
        this.effetInSelectorElement();
        setInterval(() => {
            this.nextAuto();
        }, this.getTimeForCarousel);
    }
}

export { carousel };