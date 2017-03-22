<!--

/***********************************************
* Rollover background-color button Script- © Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

//Specify optional button target: "_new" for new window, or name of FRAME target (ie "myframe")
var buttontarget=""

function change(e, color){
var el=window.event? event.srcElement: e.target
if (el.tagName=="INPUT"&&el.type=="button")
el.style.backgroundColor=color
}

function jumpto2(url){
if (buttontarget=="")
window.location=url
else if (buttontarget=="_new")
window.open(url)
else
parent[buttontarget].location=url
}
