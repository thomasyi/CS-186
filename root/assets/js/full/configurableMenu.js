mwf.full.configurableMenu=function(a){var b=function(){var c=null;if(mwf.standard.preferences.isSupported()){var f=mwf.standard.preferences.get(a);if(f!==null){try{c=JSON.parse(f)}catch(d){c=null}}}return c};return{render:function(k,c,h){var e,g,d;var f=document.getElementById(k);if(f===null){return}if(!c){c=[]}if(!h){h=[]}var m="";var l=b();if(l===null){l={};l.items=[];for(var j in c){if(c.hasOwnProperty(j)){l.items.push({key:+j,on:1});m+=c[j]}}if(mwf.standard.preferences.isSupported()){mwf.standard.preferences.set(a,JSON.stringify(l))}}else{if(!l.hasOwnProperty("items")){l.items=[]}g=l.items;d=[];for(e=0;e<g.length;e++){if(g[e].hasOwnProperty("key")){d.push(g[e].key);if(g[e].hasOwnProperty("on")){if((g[e].on===1)&&(c.hasOwnProperty(g[e].key))){m+=c[g[e].key]}else{if((g[e].on===0)&&(h.hasOwnProperty(g[e].key))){m+=h[g[e].key]}}}}}for(e in c){if((c.hasOwnProperty(e)&&d.indexOf(+e)==-1)){m+=c[e];l.items.push({key:+e,on:1})}}if(mwf.standard.preferences.isSupported()){mwf.standard.preferences.set(a,JSON.stringify(l))}}f.innerHTML=m},enableItem:function(j,d){var e,h,c,g;var f=b();c=d?1:0;h={key:+j,on:c};if(f===null){f={}}if(!f.hasOwnProperty("items")){f.items=[]}g=false;for(e in f.items){if(f.items[e].hasOwnProperty("key")&&f.items[e].key===+j){f.items[e].on=c;g=true;break}}if(!g){f.items.push(h)}mwf.standard.preferences.set(a,JSON.stringify(f))},setItemPosition:function(e,c){var d=b()||{};if(!d.hasOwnProperty("items")){d.items=[]}d.items[c-1]={key:+e,on:1};mwf.standard.preferences.set(a,JSON.stringify(d))},reset:function(){mwf.standard.preferences.clear(a)}}};