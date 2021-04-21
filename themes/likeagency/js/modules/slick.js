import $ from "jquery"
import "slick-carousel"

class Slick {
    constructor() {
        this.initiateCarousel()
    }

    initiateCarousel() {
        var $slideNumber = $(".slider__slide-number")
        var $slideStart = $(".slider__slide-start")
        var $sliderWrapper = $(".slider")

        $sliderWrapper.on("init reInit afterChange", function (event, slick, currentSlide, nextSlide) {
            //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
            var i = (currentSlide ? currentSlide : 0) + 1

            if (i < 10) {
                if (i == 1) {
                    $slideStart.text("start")
                } else {
                    $slideNumber.text("0" + i)
                    $slideStart.text("")
                }

                $slideNumber.text("0" + i)
            } else {
                $slideNumber.text(i)
            }
        })

        $sliderWrapper.slick({
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            infinite: true,
            vertical: true,
            verticalSwiping: true,
        })
    }
}

export default Slick
