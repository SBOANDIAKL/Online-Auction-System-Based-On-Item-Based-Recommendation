// for search
const searchFunction = () => {
    let filter = document.getElementById("search").value.toUpperCase();
    let myTable = document.getElementById("myTable");
    let tr = myTable.getElementsByTagName('tr');

    for (var i = 0; i < tr.length; i++) {
        let td = tr[i].getElementsByTagName('td')[0];

        if (td) {
            let textvalue = td.textContent || td.innerHTML;

            if (textvalue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }

        }
    }
}

const searchCard = () => {
    let filter = document.getElementById("searchCard").value.toUpperCase();
    let myCards = document.getElementById("myCards");
    let myCard = myTable.getElementsBy('myCard');

    for (var i = 0; i < myCard; i++) {
        let card = myCard[i].getElementsByTagName('td')[0];

        if (td) {
            let textvalue = td.textContent || td.innerHTML;

            if (textvalue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }

        }
    }
}