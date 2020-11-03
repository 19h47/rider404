import AbstractLottieBlock from 'blocks/AbstractLottieBlock';

/**
 *
 * @constructor
 * @param {object} container
 */
export default class LogoBlock extends AbstractLottieBlock {
	constructor(container) {
		super(container, { autoplay: true });
	}

	initEvents() {
		super.initEvents();
		this.rootElement.addEventListener('mouseover', () => this.animation.goToAndPlay(0));
	}
}
