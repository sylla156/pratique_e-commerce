

/**
 * [Description carousel]
 * @author sylla ibrahim <s67986601@gmail.com>
 * 
 * elle permet de faire bouger les elements d'un carousel;
 */
class carousel {
    /**
     * 
     * @param {_carouselMain} _carouselMain - le premier child du carousel qui contient tous
     * @param {*} _carouselAllChild - tous les enfant du carousel
     */
    constructor(_carouselMain, _carouselAllChild) {
        this.carouselMAin = _carouselMain;
        this.carouselAllChild = _carouselAllChild;

        this.numberElement = this.carouselAllChild.length;
        this.elementMove = 0;
    }

    log() {
        console.log(this.elementMove);
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
        this.elementMove += this.widthElement();
        if (this.elementMove >= (this.widthElement() * this.numberElement)) {
            this.elementMove = 0;
        }
    }

    /**
     * @description le pilier le la class c'est que tous les methode fusionne
     */
    execute() {
        setInterval(() => {
            this.nextAuto();
            //  console.log(this.elementMove);
            this.carouselMAin.style.transform = `translate(-${this.elementMove}px)`
        }, 10000);
    }
}

export {carousel};