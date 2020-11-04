import LottieBlock from 'blocks/LottieBlock';
import Scroll from 'common/Scroll';

/**
 *
 * @constructor
 */
export default class LoveTwoRideFourLoveBlock extends LottieBlock {
	initEvents() {
		super.initEvents();

		Scroll.on('call', (value, way) => {
			if ('love-two-ride-four-love' === value && 'enter' === way) {
				setTimeout(() => this.animation.play(), 1500);
			}
		});
	}
}
