window.addEventListener("DOMContentLoaded", () => {
	const accordionBtns = document.querySelectorAll(".accordion");

	console.log(accordionBtns);
	accordionBtns.forEach((accordion) => {
		console.log(accordion);
		accordion.onclick = function () {
			this.classList.toggle("is-open");

			let content = this.nextElementSibling;

			if (content.style.maxHeight) {
				//this is if the accordion is open
				content.style.maxHeight = null;
			} else {
				//if the accordion is currently closed
				content.style.maxHeight = content.scrollHeight + "px";
				console.log(content.style.maxHeight);
			}
		};
	});
});

/* Create an FAQ page and put the accordion buttons in there */
