angular.module('articleService', [])

.factory('Article', function($http) {

    return {
        // get all the comments
        get : function() {
            return $http.get('/api/articles');
        },

        // save a comment (pass in comment data)
        save : function(articleData) {
            return $http({
                method: 'POST',
                url: '/api/articles',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(articleData)
            });
        },

        // destroy a comment
        // destroy : function(id) {
        //     return $http.delete('/api/articles/' + id);
        // }
    }

});