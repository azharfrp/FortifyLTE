require('./bootstrap');
var Turbolinks = require("turbolinks")
Turbolinks.start()
document.addEventListener('turbolinks:load', () => {
	window.livewire.rescan()
})
