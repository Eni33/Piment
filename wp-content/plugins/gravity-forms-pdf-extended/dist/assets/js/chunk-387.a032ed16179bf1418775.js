(self.webpackChunkgravity_pdf=self.webpackChunkgravity_pdf||[]).push([[387],{9387:(e,t,r)=>{"use strict";r.r(t),r.d(t,{TemplateList:()=>$,default:()=>A});r(1817),r(1703);var a=r(7294),s=r(5697),i=r.n(s),n=r(6706),l=r(5439),o=(r(6992),r(3948),r(7658),r(6550)),p=e=>{var{image:t}=e,r=t?"theme-screenshot":"theme-screenshot blank";return a.createElement("div",{className:r},t?a.createElement("img",{src:t,alt:""}):null)};p.propTypes={image:i().string};const c=p;var m=r(38),u=e=>{var{label:t}=e;return a.createElement("span",{className:"more-details"},t)};u.propTypes={label:i().string};var d=e=>{var{group:t}=e;return a.createElement("p",{className:"theme-author"},t)};d.propTypes={group:i().string};var h=r(5218),f=r(6152),g=r(4738);function v(e,t,r){return(t=function(e){var t=function(e,t){if("object"!=typeof e||null===e)return e;var r=e[Symbol.toPrimitive];if(void 0!==r){var a=r.call(e,t||"default");if("object"!=typeof a)return a;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}
/**
 * Display the individual template item for usage our template list
 *
 * @package     Gravity PDF
 * @copyright   Copyright (c) 2023, Blue Liquid Designs
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       4.1
 */(e,"string");return"symbol"==typeof t?t:String(t)}(t))in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}class b extends a.Component{constructor(){super(...arguments),v(this,"handleMaybeShowDetailedTemplate",(e=>{13===e.keyCode&&-1===e.target.className.indexOf("button")&&this.handleShowDetailedTemplate()})),v(this,"handleShowDetailedTemplate",(()=>{this.props.history.push("/template/"+this.props.template.id)})),v(this,"removeMessage",(()=>{this.props.updateTemplateParam(this.props.template.id,"message",null)}))}render(){var e=this.props.template,t=this.props.activeTemplate===e.id,r=e.compatible,s=t?"active theme":"theme";return a.createElement("div",{onClick:this.handleShowDetailedTemplate,onKeyDown:this.handleMaybeShowDetailedTemplate,className:s,"data-slug":e.id,tabIndex:"150",role:"option","aria-label":e.group+" "+e.template+" "+GFPDF.details},a.createElement(c,{image:e.screenshot}),e.error?a.createElement(m.Z,{text:e.error,error:!0}):null,e.message?a.createElement(m.Z,{text:e.message,dismissableCallback:this.removeMessage,dismissable:!0,delay:12e3}):null,a.createElement(u,{label:this.props.templateDetailsText}),a.createElement(d,{group:e.group}),a.createElement(h.VG,{name:e.template}),a.createElement("div",{className:"theme-actions"},!t&&r?a.createElement(f.ZP,{template:this.props.template,buttonText:this.props.activateText}):null))}}v(b,"propTypes",{history:i().object,template:i().object,activeTemplate:i().string,updateTemplateParam:i().func,activateText:i().string,templateDetailsText:i().string});const T=(0,o.EN)((0,n.$j)((e=>({activeTemplate:e.template.activeTemplate})),(e=>({updateTemplateParam:(t,r,a)=>{e((0,g.Fz)(t,r,a))}})))(b));r(4916),r(4765);var y=r(1296),x=r.n(y);function E(e,t,r){return(t=function(e){var t=function(e,t){if("object"!=typeof e||null===e)return e;var r=e[Symbol.toPrimitive];if(void 0!==r){var a=r.call(e,t||"default");if("object"!=typeof a)return a;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}
/**
 * Handles the PDF template search functionality
 *
 * @package     Gravity PDF
 * @copyright   Copyright (c) 2023, Blue Liquid Designs
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       4.1
 */(e,"string");return"symbol"==typeof t?t:String(t)}(t))in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}class S extends a.Component{constructor(e){super(e),E(this,"handleSearch",(e=>{e.persist(),this.runSearch(e)})),E(this,"runSearch",(e=>{this.props.onSearch(e.target.value||"")})),this.runSearch=x()(this.runSearch,200)}componentDidMount(){this.input.focus()}render(){return a.createElement("div",{role:"form"},a.createElement("input",{className:"wp-filter-search",id:"wp-filter-search-input",ref:e=>this.input=e,placeholder:GFPDF.searchTemplatePlaceholder,type:"search","aria-describedby":"live-search-desc",tabIndex:"145",onChange:this.handleSearch,defaultValue:this.props.search}))}}E(S,"propTypes",{onSearch:i().func,search:i().string});const j=(0,n.$j)((e=>({search:e.template.search})),(e=>({onSearch:t=>{e((0,g.f7)(t))}})))(S);
/**
 * Renders the Template Header Title
 *
 * @package     Gravity PDF
 * @copyright   Copyright (c) 2023, Blue Liquid Designs
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       4.1
 */
var P=e=>{var{header:t}=e;return a.createElement("h1",null,t)};P.propTypes={header:i().string};const U=P;r(9601);var w=r(4184),N=r.n(w),O=r(4977);function D(){return D=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var a in r)Object.prototype.hasOwnProperty.call(r,a)&&(e[a]=r[a])}return e},D.apply(this,arguments)}function I(e,t,r){return(t=function(e){var t=function(e,t){if("object"!=typeof e||null===e)return e;var r=e[Symbol.toPrimitive];if(void 0!==r){var a=r.call(e,t||"default");if("object"!=typeof a)return a;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}
/**
 * Handles the uploading of new PDF templates to the server
 *
 * @package     Gravity PDF
 * @copyright   Copyright (c) 2023, Blue Liquid Designs
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       4.1
 */(e,"string");return"symbol"==typeof t?t:String(t)}(t))in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}class F extends a.Component{constructor(){super(...arguments),I(this,"state",{ajax:!1,error:"",message:""}),I(this,"handleOndrop",(e=>{e instanceof Array&&e.length>0&&e.forEach((e=>{var t=e.name;this.checkFilename(t)&&this.checkFilesize(e.size)&&(this.setState({ajax:!0,error:"",message:""}),this.props.postTemplateUploadProcessing(e,t))}))})),I(this,"checkFilename",(e=>".zip"===e.substr(e.length-4)||(this.setState({error:this.props.filenameErrorText}),!1))),I(this,"checkFilesize",(e=>!(e/1024>10240)||(this.setState({error:this.props.filesizeErrorText}),!1))),I(this,"ajaxSuccess",(e=>{e.body.templates.forEach((e=>{void 0===this.props.templates.find((t=>t.id===e.id))?(e.new=!0,e.message=this.props.installSuccessText,this.props.addNewTemplate(e)):this.props.updateTemplateParam(e.id,"message",this.props.installUpdatedText)})),this.setState({ajax:!1,message:this.props.templateSuccessfullyInstalledUpdated}),this.props.clearTemplateUploadProcessing()})),I(this,"ajaxFailed",(e=>{this.setState({error:e.response.body&&void 0!==e.response.body.error?e.response.body.error:this.props.genericUploadErrorText,ajax:!1}),this.props.clearTemplateUploadProcessing()})),I(this,"removeMessage",(()=>{this.setState({message:""})}))}componentDidUpdate(e){var{templateUploadProcessingSuccess:t,templateUploadProcessingError:r}=this.props;e.templateUploadProcessingSuccess!==t&&Object.keys(t).length>0&&this.ajaxSuccess(t),e.templateUploadProcessingError!==r&&Object.keys(r).length>0&&this.ajaxFailed(r)}render(){return a.createElement("div",{className:"theme add-new-theme gfpdf-dropzone"},a.createElement(O.ZP,{onDrop:this.handleOndrop},(e=>{var{getRootProps:t,getInputProps:r,isDragActive:s}=e;return a.createElement("div",D({},t(),{className:N()("dropzone",{"dropzone--isActive":s})}),a.createElement("input",r()),a.createElement("a",{href:"#/template",className:this.state.ajax?"doing-ajax":"","aria-labelledby":"gfpdf-template-install-instructions"},a.createElement("div",{className:"theme-screenshot"},a.createElement("span",null)),""!==this.state.error?a.createElement(m.Z,{text:this.state.error,error:!0}):null,""!==this.state.message?a.createElement(m.Z,{text:this.state.message,dismissable:!0,dismissableCallback:this.removeMessage}):null,a.createElement("h2",{className:"theme-name"},this.props.addTemplateText)),a.createElement("div",{className:"gfpdf-template-install-instructions",id:"gfpdf-template-install-instructions"},this.props.templateInstallInstructions))})))}}I(F,"propTypes",{genericUploadErrorText:i().string,addTemplateText:i().string,filenameErrorText:i().string,filesizeErrorText:i().string,installSuccessText:i().string,installUpdatedText:i().string,templateSuccessfullyInstalledUpdated:i().string,templateInstallInstructions:i().string,addNewTemplate:i().func,updateTemplateParam:i().func,postTemplateUploadProcessing:i().func,clearTemplateUploadProcessing:i().func,templates:i().array,templateUploadProcessingSuccess:i().object,templateUploadProcessingError:i().object});const k=(0,n.$j)((e=>({templates:e.template.list,templateUploadProcessingSuccess:e.template.templateUploadProcessingSuccess,templateUploadProcessingError:e.template.templateUploadProcessingError})),(e=>({addNewTemplate:t=>{e((0,g.WF)(t))},updateTemplateParam:(t,r,a)=>{e((0,g.Fz)(t,r,a))},postTemplateUploadProcessing:(t,r)=>{e((0,g.NC)(t,r))},clearTemplateUploadProcessing:()=>{e((0,g.Dy)())}})))(F);var z,C,M,Z=r(3223);
/**
 * The master component for rendering the all PDF templates as a list
 *
 * @package     Gravity PDF
 * @copyright   Copyright (c) 2023, Blue Liquid Designs
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       4.1
 */
class $ extends a.Component{render(){var e=GFPDF.userCapabilities.administrator||GFPDF.userCapabilities.gravityforms_edit_settings||!1;return a.createElement(l.Z,{header:a.createElement(U,{header:this.props.templateHeaderText}),closeRoute:"/"},a.createElement(j,null),a.createElement("div",{role:"listbox"},this.props.templates.map(((e,t)=>a.createElement(T,{key:t,template:e,templateDetailsText:this.props.templateDetailsText,activateText:this.props.activateText}))),e&&a.createElement(k,{ajaxUrl:this.props.ajaxUrl,ajaxNonce:this.props.ajaxNonce,addTemplateText:this.props.addTemplateText,genericUploadErrorText:this.props.genericUploadErrorText,filenameErrorText:this.props.filenameErrorText,filesizeErrorText:this.props.filesizeErrorText,installSuccessText:this.props.installSuccessText,installUpdatedText:this.props.installUpdatedText,templateSuccessfullyInstalledUpdated:this.props.templateSuccessfullyInstalledUpdated,templateInstallInstructions:this.props.templateInstallInstructions})))}}z=$,C="propTypes",M={templateHeaderText:i().string,templates:i().array,templateDetailsText:i().string,activateText:i().string,ajaxUrl:i().string,ajaxNonce:i().string,addTemplateText:i().string,genericUploadErrorText:i().string,filenameErrorText:i().string,filesizeErrorText:i().string,installSuccessText:i().string,installUpdatedText:i().string,templateSuccessfullyInstalledUpdated:i().string,templateInstallInstructions:i().string},(C=function(e){var t=function(e,t){if("object"!=typeof e||null===e)return e;var r=e[Symbol.toPrimitive];if(void 0!==r){var a=r.call(e,t||"default");if("object"!=typeof a)return a;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(e,"string");return"symbol"==typeof t?t:String(t)}(C))in z?Object.defineProperty(z,C,{value:M,enumerable:!0,configurable:!0,writable:!0}):z[C]=M;const A=(0,n.$j)((e=>({templates:(0,Z.ZP)(e)})))($)},4184:(e,t)=>{var r;
/*!
	Copyright (c) 2018 Jed Watson.
	Licensed under the MIT License (MIT), see
	http://jedwatson.github.io/classnames
*/!function(){"use strict";var a={}.hasOwnProperty;function s(){for(var e=[],t=0;t<arguments.length;t++){var r=arguments[t];if(r){var i=typeof r;if("string"===i||"number"===i)e.push(r);else if(Array.isArray(r)){if(r.length){var n=s.apply(null,r);n&&e.push(n)}}else if("object"===i){if(r.toString!==Object.prototype.toString&&!r.toString.toString().includes("[native code]")){e.push(r.toString());continue}for(var l in r)a.call(r,l)&&r[l]&&e.push(l)}}}return e.join(" ")}e.exports?(s.default=s,e.exports=s):void 0===(r=function(){return s}.apply(t,[]))||(e.exports=r)}()},1296:(e,t,r)=>{var a=NaN,s="[object Symbol]",i=/^\s+|\s+$/g,n=/^[-+]0x[0-9a-f]+$/i,l=/^0b[01]+$/i,o=/^0o[0-7]+$/i,p=parseInt,c="object"==typeof r.g&&r.g&&r.g.Object===Object&&r.g,m="object"==typeof self&&self&&self.Object===Object&&self,u=c||m||Function("return this")(),d=Object.prototype.toString,h=Math.max,f=Math.min,g=function(){return u.Date.now()};function v(e){var t=typeof e;return!!e&&("object"==t||"function"==t)}function b(e){if("number"==typeof e)return e;if(function(e){return"symbol"==typeof e||function(e){return!!e&&"object"==typeof e}(e)&&d.call(e)==s}(e))return a;if(v(e)){var t="function"==typeof e.valueOf?e.valueOf():e;e=v(t)?t+"":t}if("string"!=typeof e)return 0===e?e:+e;e=e.replace(i,"");var r=l.test(e);return r||o.test(e)?p(e.slice(2),r?2:8):n.test(e)?a:+e}e.exports=function(e,t,r){var a,s,i,n,l,o,p=0,c=!1,m=!1,u=!0;if("function"!=typeof e)throw new TypeError("Expected a function");function d(t){var r=a,i=s;return a=s=void 0,p=t,n=e.apply(i,r)}function T(e){var r=e-o;return void 0===o||r>=t||r<0||m&&e-p>=i}function y(){var e=g();if(T(e))return x(e);l=setTimeout(y,function(e){var r=t-(e-o);return m?f(r,i-(e-p)):r}(e))}function x(e){return l=void 0,u&&a?d(e):(a=s=void 0,n)}function E(){var e=g(),r=T(e);if(a=arguments,s=this,o=e,r){if(void 0===l)return function(e){return p=e,l=setTimeout(y,t),c?d(e):n}(o);if(m)return l=setTimeout(y,t),d(o)}return void 0===l&&(l=setTimeout(y,t)),n}return t=b(t)||0,v(r)&&(c=!!r.leading,i=(m="maxWait"in r)?h(b(r.maxWait)||0,t):i,u="trailing"in r?!!r.trailing:u),E.cancel=function(){void 0!==l&&clearTimeout(l),p=0,a=o=s=l=void 0},E.flush=function(){return void 0===l?n:x(g())},E}}}]);