function modal(){
	let embed = document.querySelector(".embed");
	let close = document.querySelector(".btn_close");
	let open = document.querySelector(".videoAbout .btn_open");

	open.addEventListener("click", () =>{
		embed.classList.add("active_embed");
	});

	close.addEventListener("click", () =>{
		embed.classList.remove("active_embed");
	});
}

window.addEventListener("load", modal);