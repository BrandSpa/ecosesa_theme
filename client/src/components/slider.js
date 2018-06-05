import React, { Component } from 'react';
import Slide from './slider_slide';
import { ArrowLeft, ArrowRight } from './arrows';

class Slider extends Component {
	state = {
		slide: 0
	}

	next = e => {
		if(e) e.preventDefault();
		const total = this.props.slides.length - 1;
		const current = this.state.slide;
		const slide = current < total ? current + 1 : 0;
		this.setState({ slide });
	}

	prev = e => {
		if(e) e.preventDefault();
		const total = this.props.slides.length;
		const current = this.state.slide;
		const slide = current > 0 ? current - 1 : 0;
		this.setState({ slide });
	}

	render() {
		const { slides } = this.props;

		const viewportStyle = {
			width: `${100 * slides.length}%`,
			transform: `translate3d( -${100 / slides.length * this.state.slide}%, 0, 0 )`,

		};

		const slideWidth = `${100 / slides.length}%`;

		return (
			<div className="slider">
				<div className="slider__viewport" style={viewportStyle}>
					{slides.map((slide, i) =>
							<Slide
								key={i}
								slide={slide}
								current={this.state.slide}
								index={i}
								slideWidth={slideWidth}
							/>
					)}
				</div>
				{this.props.slides.length > 1 ? 
					<div className="slider__btns">
					<a className="slider__btns__left" href="#" onClick={this.prev}>
						<ArrowLeft />
					</a>
					<a className="slider__btns__right" href="#" onClick={this.next}>
						<ArrowRight />
					</a>
				</div>
				:''
				}
				
			</div>
		)
	}
}

export default Slider;
