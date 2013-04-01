// JavaScript Document

function imageOver(imgs) {
	imgs.src = imgs.src.replace(".png", "_active.png");
}
function imageOut(imgs) {
	imgs.src = imgs.src.replace("_active.png", ".png");
}