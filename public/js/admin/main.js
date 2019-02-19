const articles = document.getElementById('articles');
if(articles) {
    articles.addEventListener('click', e => {
        if(e.target.className === "btn btn-secondary delete" || e.target.className === "fe fe-trash-2 delete") {
            if(confirm('Are you sure you want to delete this article?')) {
                const id = e.target.getAttribute('data-id');
                fetch('/articles/'+id+'/delete/', {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                }).then(res => window.location.reload());
            }
        }
    });
}

