const buttonPrev = document.getElementById('button-prev');
const buttonNext = document.getElementById('button-next');
const track = document.getElementById('track');
const slickList = document.getElementById('slick-list');
const slick = document.querySelectorAll('.slick');

const slickWidth = slick[0].offsetWidth;

buttonPrev.onclick = () => Move(1);
buttonNext.onclick = () => Move(2);

function Move(value) {
    const trackWidth = track.offsetWidth;
    const listWidth = slickList.offsetWidth;

    track.style.left == "" ? leftPosition = track.style.left = 0 : leftPosition = parseFloat(track.style.left.slice(0, -2) * -1);

    if(leftPosition < (trackWidth - listWidth) && value == 2) {
        track.style.left = `${-1 * (leftPosition + slickWidth)}px`;
    } else if(leftPosition > 0 && value == 1) {
        track.style.left = `${-1 * (leftPosition - slickWidth)}px`;
    }
}
//--------------------------------------------------------------------------------------------------------
const buttonPrev2 = document.getElementById('button-prev2');
const buttonNext2 = document.getElementById('button-next2');
const track2 = document.getElementById('track2');
const slickList2 = document.getElementById('slick-list2');
const slick2 = document.querySelectorAll('.slick2');

const slickWidth2 = slick[0].offsetWidth;

buttonPrev2.onclick = () => Move2(1);
buttonNext2.onclick = () => Move2(2);

function Move2(value) {
    const trackWidth2 = track2.offsetWidth;
    const listWidth2 = slickList2.offsetWidth;

    track2.style.left == "" ? leftPosition2 = track2.style.left = 0 : leftPosition2 = parseFloat(track2.style.left.slice(0, -2) * -1);

    if(leftPosition2 < (trackWidth2 - listWidth2) && value == 2) {
        track2.style.left = `${-1 * (leftPosition2 + slickWidth2)}px`;
    } else if(leftPosition2 > 0 && value == 1) {
        track2.style.left = `${-1 * (leftPosition2 - slickWidth2)}px`;
    }
}
//--------------------------------------------------------------------------------------------------------
const buttonPrev3 = document.getElementById('button-prev3');
const buttonNext3 = document.getElementById('button-next3');
const track3 = document.getElementById('track3');
const slickList3 = document.getElementById('slick-list3');
const slick3 = document.querySelectorAll('.slick3');

const slickWidth3 = slick[0].offsetWidth;

buttonPrev3.onclick = () => Move3(1);
buttonNext3.onclick = () => Move3(2);

function Move3(value) {
    const trackWidth3 = track3.offsetWidth;
    const listWidth3 = slickList3.offsetWidth;

    track3.style.left == "" ? leftPosition3 = track3.style.left = 0 : leftPosition3 = parseFloat(track3.style.left.slice(0, -2) * -1);

    if(leftPosition3 < (trackWidth3 - listWidth3) && value == 2) {
        track3.style.left = `${-1 * (leftPosition3 + slickWidth3)}px`;
    } else if(leftPosition3 > 0 && value == 1) {
        track3.style.left = `${-1 * (leftPosition3 - slickWidth3)}px`;
    }
}
//--------------------------------------------------------------------------------------------------------
const buttonPrev4 = document.getElementById('button-prev4');
const buttonNext4 = document.getElementById('button-next4');
const track4 = document.getElementById('track4');
const slickList4 = document.getElementById('slick-list4');
const slick4 = document.querySelectorAll('.slick4');

const slickWidth4 = slick[0].offsetWidth;

buttonPrev4.onclick = () => Move4(1);
buttonNext4.onclick = () => Move4(2);

function Move4(value) {
    const trackWidth4 = track4.offsetWidth;
    const listWidth4 = slickList4.offsetWidth;

    track4.style.left == "" ? leftPosition4 = track4.style.left = 0 : leftPosition4 = parseFloat(track4.style.left.slice(0, -2) * -1);

    if(leftPosition4 < (trackWidth4 - listWidth4) && value == 2) {
        track4.style.left = `${-1 * (leftPosition4 + slickWidth4)}px`;
    } else if(leftPosition4 > 0 && value == 1) {
        track4.style.left = `${-1 * (leftPosition4 - slickWidth4)}px`;
    }
}