
/**
 * [Description slide]
 * slide est la class qui nous permet de afficher ou de masquer un bloc de code
 * elle a besion:
 *   -btn lui qui sera ecouter 
 *   -bloc lui sera afficher
 *   -flisBloc le fils de bloc qui contient tous pour opacity
 * elle fonctionne comme suite :
 *   -il aura deux class noClick et click
 *   -sera toggle a chaque click de la class
 *   -mais la width dans un settimeout
 *   -et opacity dans un setimeout encore sur le flisBloc
 *  @author sylle ibrahim
 */
 class slide {
    /**
     * 
     * @param {DOM} btnClicker le btn qui sera cliker pour faire effet 
     * @param {DOM} affiche  le bloc qui sera afficher ou maasquer
     * @param {DOM} contenueAffichage le fils du bloc qui contient tous
     */
    constructor(btnClicker, affiche, contenueAffichage,rotate) {
        this.btnClicker = btnClicker;
        this.affiche = affiche;
        this.contenueAffichage = contenueAffichage;
        this.rotate = rotate;

        this.etatRotate = 0;
    }

    /**
     * 
     * @param {string} noClick c'est la class css qui masque affiche
     */
    setStyleNoClick(noClick = "noClick") {
        this.noClick = noClick;
    }
    /**
     * 
     * @param {string} click c'est le contrait de noClick elle permet d'afficher 
     */
    setStyleClick(click = "click") {
        this.click = click;
    }

    /**
     * 
     * @param {time} time0fSlide pour le time de affiche 
     * @param {time} timeOfOpacity pour le time de opacity
     */
    setTimeForSlide(time0fSlide = 50, timeOfOpacity = 100) {
        this.time0fSlide = time0fSlide;
        this.timeOfOpacity = timeOfOpacity
    }

    /**
     * 
     * @returns ils return les time qui seront utiliser
     */
    getTimeForSlide() {
        return Array(this.time0fSlide, this.timeOfOpacity);
    }

    /**
     * 
     * @returns elle return la valeur de la class noclick qui permet de masque
     */
    getStyleNoClick() {
        return this.noClick;
    }

    /**
     * 
     * @returns elle return le nom de la class click qui permet d'afficher
     */
    getStyleClick() {
        return this.click;
    }

    rotateBtnClick(){
        if(this.etatRotate === 0) {
            this.btnClicker.style.transform = "rotate(80deg)";
            this.etatRotate = 1;
        } else {
            this.btnClicker.style.transform = "rotate(0deg)";
            this.etatRotate = 0;
        }
    }


    execute() {

        this.btnClicker.addEventListener('click', () => {
            this.rotate === true ? this.rotateBtnClick() : "";
            this.affiche.classList.toggle(this.getStyleNoClick())
            setTimeout(() => {
                this.affiche.classList.toggle(this.getStyleClick());
                setTimeout(() => {
                    this.contenueAffichage.style.opacity = this.contenueAffichage.style.opacity == 1 ? 0 : 1;
                }, this.getTimeForSlide()[1]);
            },this.getTimeForSlide()[0]);

        },true)
    }


}
export {slide};