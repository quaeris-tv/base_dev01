(self.webpackChunkAdminLTE=self.webpackChunkAdminLTE||[]).push([[773],{4381:(e,t,o)=>{var a=o(9755);o(5587),o(922),o(8646),o(2649),a((function(){a(".i-checks").iCheck({checkboxClass:"icheckbox_square-blue",radioClass:"iradio_square-blue"}),a(".js-datepicker").datepicker({autoclose:!0,todayHighlight:!0})}))},5587:(e,t,o)=>{o(9755),o(9755);window._=o(6486);try{o.g.$=o.g.jQuery=o(9755),window.Popper=o(5398).default,o(5577),o(1402),o(3723),o(9303),o(4728),o(3752),window.Swal=Swal=o(6455),window.noUiSlider=o(4211),o(686);window.flatpickr=o(6667)}catch(e){console.log(e)}console.log("start"),window.axios=o(9669),window.axios.defaults.headers.common["X-Requested-With"]="XMLHttpRequest";var a=document.head.querySelector('meta[name="csrf-token"]');a?window.axios.defaults.headers.common["X-CSRF-TOKEN"]=a.content:console.error("CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token")},8646:(e,t,o)=>{var a=o(9755);({linkSelector:"a.btn-confirm-delete",modalTitle:"Are you sure?",modalMessage:"You will not be able to recover this entry?",modalConfirmButtonText:"Yes, delete it!",laravelToken:null,url:"/",init:function(){a(this.linkSelector).on("click",{self:this},this.handleClick)},handleClick:function(e){e.preventDefault();var t=e.data.self,o=a(this);t.modalTitle=o.data("title")||t.modalTitle,t.modalMessage=o.data("message")||t.modalMessage,t.modalMessage=t.modalMessage+"["+o.data("id")+"]",t.modalConfirmButtonText=o.data("button-text")||t.modalConfirmButtonText,t.url=o.data("href"),t.laravelToken=a("meta[name=csrf-token]").attr("content"),t.confirmDelete()},confirmDelete:function(){Swal.fire({title:this.modalTitle,text:this.modalMessage,type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",confirmButtonText:this.modalConfirmButtonText}).then(function(e){e.value&&this.makeDeleteRequest()}.bind(this))},makeDeleteRequest:function(){a.ajax({url:this.url,type:"DELETE",data:{_method:"delete",_token:this.laravelToken},success:function(e){console.log(e),Swal.fire("Deleted!","Your imaginary file has been deleted.","success"),location.reload()},error:function(e,t,o){console.log("url : "+this.url),console.log("XMLHttpRequest"),console.log(e),a("#div_debug").html(e.responseText),console.log("textStatus"),console.log(t),console.log("errorThrown"),console.log(o),alert("Status: "+t),alert("Error: "+o)}})},makeDeleteRequest1:function(){var e=a("<form>",{method:"POST",action:this.url}),t=a("<input>",{type:"hidden",name:"_token",value:this.laravelToken}),o=a("<input>",{name:"_method",type:"hidden",value:"DELETE"});return e.append(t,o).appendTo("body").submit()}}).init()},2649:(e,t,o)=>{var a=o(9755);a(".datetime_flatpickr").flatpickr({wrap:!0,dateFormat:"d/m/Y H:i",enableTime:!0,time_24hr:!0}),a(".date_flatpickr").flatpickr({wrap:!0,dateFormat:"d/m/Y",time_24hr:!0}),a(".time_flatpickr").flatpickr({wrap:!0,dateFormat:"H:i",noCalendar:!0,enableTime:!0,time_24hr:!0})},922:(e,t,o)=>{"use strict";o.r(t),(0,o(821).ri)({data:function(){return{count:0}}}).mount("#app")},6737:()=>{}},e=>{var t=t=>e(e.s=t);e.O(0,[170,898],(()=>(t(4381),t(6737))));e.O()}]);
//# sourceMappingURL=app.js.map