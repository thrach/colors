Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('content');

var vue = new Vue({

    el : 'body',

    data : {
        search : '',
        arrColors : []
    },

    methods : {
       getColorByMouline : function() {
           var url  = '/colors/search/mouline';
           this.$http.post(url,{search : this.search},function(response){
               this.arrColors = response;
           });
       }
    }
});
