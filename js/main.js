document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("landingSearchbox").focus();
});

document.getElementById("landingSearchBack").addEventListener('click', function () {
    resetSearchesContainer();
});

document.getElementById("landingSearchbox").addEventListener("keyup", function () {
    document.getElementById("searchesWrapper").innerHTML = "<div class='searches-loading'></div>";
    document.getElementById("landingSearchBack").style.display = 'block';
    document.getElementById("searchesContainer").style.display = 'flex';

    let findText = this.value;

    if (findText != "") {
        let restaurantArr = [
            {
                value: "restaurant-1",
                text: "Restaurant 1"
            }
        ];

        let searchesHtml = ``;

        if (restaurantArr.length > 0) {
            for (i = 0; i < restaurantArr.length; i++) {
                searchesHtml += `<a class="search-element" href="./showRestaurant.php?resturantCode=${restaurantArr[i]['value']}">${restaurantArr[i]['text']}</a>`;
            }
        } else {
            searchesHtml = "<div class='searches-no-found'>No Restaurant Found</div>";
        }

        document.getElementById("searchesWrapper").innerHTML = searchesHtml;
    } else {
        resetSearchesContainer();
    }
});

function resetSearchesContainer() {
    document.getElementById("searchesWrapper").innerHTML = "";
    document.getElementById("landingSearchBack").style.display = 'none';
    document.getElementById("searchesContainer").style.display = 'none';
}