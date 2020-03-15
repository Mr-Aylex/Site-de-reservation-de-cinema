(function(){var showPlayer=playerConfig.showPlayer;var eventPrefix=showPlayer?'ads':'youtube';var preScreen=document.querySelector('[js-player-prescreen]');var waitScreen=document.querySelector('[js-player-waitscreen]');var postScreen=document.querySelector('[js-player-postscreen]');var waitSeconds=document.querySelector('[js-player-wait-seconds]');var waitText1=document.querySelector('[js-player-wait-text-1]');var waitText2=document.querySelector('[js-player-wait-text-2]');var playerIframe=document.querySelector('[js-player-iframe]');var playerLink=document.querySelector('[js-player-link]');var startWait=function(){var showPlayer=playerConfig.showPlayer;var waitTime=showPlayer?playerConfig.waitTime.ad:playerConfig.waitTime.youtube;if(waitText1&&playerConfig.waitText1){waitText1.src=generateImage(playerConfig.waitText1,'white');}
if(waitText2&&playerConfig.waitText2){waitText2.src=generateImage(playerConfig.waitText2,'white');}
hideElement(preScreen);showElement(waitScreen);triggerEvent('playerStartWait');triggerFbEvent('PlayerStartWait',{waitTime:waitTime});var timeUpdater=function(currentTime){if(currentTime<=0){return startPost();}else{var timeElapsed=waitTime-currentTime;if(timeElapsed>0&&timeElapsed%5===0){triggerFbEvent('PlayerWaitElapsed'+timeElapsed);}
waitSeconds.src=generateImage(String(currentTime)+' s','white');return setTimeout(timeUpdater,1000,currentTime-1);}};timeUpdater(waitTime||0);};var startPost=function(){hideElement(waitScreen);showElement(postScreen);triggerEvent('playerStartPos');triggerFbEvent('PlayerStartPos');if(!playerConfig.showPlayer&&playerIframe){var key=playerIframe.getAttribute('key');playerIframe.src='https://www.youtube.com/embed/'+key+'?autoplay=1';}else{if(playerLink){var adLinks=playerConfig.adLink;var chosenLink;if(!Array.isArray(adLinks)){chosenLink=adLinks;}else{chosenLink=adLinks[Math.floor(Math.random()*adLinks.length)];}
if(chosenLink&&window.combinationName){chosenLink+='&affsub5='+window.combinationName;}
playerLink.setAttribute('href',chosenLink);var targetBlank=playerConfig.adLinkTargetBlank;if(targetBlank){playerLink.setAttribute('target','_blank');}}}};var clickAd=function(){triggerFbEvent('ClickAd');};var hideElement=function(element){element.style.display='none';};var showElement=function(element){element.style.display='block';};var generateImage=function(text,color){var canvas=document.createElement('canvas');var ctx=canvas.getContext('2d');var x=0;var y=15;var lineheight=25;var lines=text.split('\n');var lineLengthOrder=lines.slice(0).sort(function(a,b){return b.length-a.length;});color=color||'#000000';ctx.font='14px Arial';ctx.textBaseline='middle';ctx.canvas.width=ctx.measureText(lineLengthOrder[0]).width+0;ctx.canvas.height=(lines.length*lineheight);ctx.fillStyle=color;ctx.font='14px Arial';for(var i=0;i<lines.length;i++){ctx.fillText(lines[i],x,y+(i*lineheight));}
return ctx.canvas.toDataURL();};var triggerEvent=function(type,payload){try{var event=new CustomEvent(type,payload);document.dispatchEvent(event);}catch(err){console.log('Error triggering event',err);}}
var triggerFbEvent=function(type,payload){if(window.fbq){fbq('trackCustom',eventPrefix+type,payload);}}
preScreen.addEventListener('click',startWait);if(playerLink){playerLink.addEventListener('click',clickAd);}}())