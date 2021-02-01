function myfunction() {
    var search, filter, tittle ,ol ,a;
    search = document.getElementById('search');
    filter = search.value.toUpperCase();
    ol = document.getElementsByClassName('align');
    li = document.getElementsByClassName("card-title");

    for (i = 0; i < li.length; i++){
        a = li[i].queryselector("a").innerHTML;
        if (a.toUpperCase().indexOf(filter) > -1) {
            document.display="sd"
        }
        else {
            li[i].style.display = "none";
        }
            
        }
    }