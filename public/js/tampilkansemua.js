//PAKAIAN ATAS//
document.addEventListener("DOMContentLoaded", function () {
    const showAllBtn = document.getElementById("showAllBtn");
    const hideAllBtn = document.getElementById("hideAllBtn");
    const pakaianatasItems = document.querySelectorAll(".pakaianatas > div");

    // Function to hide pakaianatas items starting from index 5
    function hideExtraPakaianatasItems() {
        for (let i = 5; i < pakaianatasItems.length; i++) {
            pakaianatasItems[i].style.display = "none";
        }
    }

    // Function to show all pakaianatas items
    function showAllPakaianatasItems() {
        pakaianatasItems.forEach((item) => {
            item.style.display = "block";
        });
        hideAllBtn.style.display = "block"; // Show the "Sembunyikan" button
        showAllBtn.style.display = "none"; // Hide the "Tampilkan Semua" button
    }

    // Function to hide all extra pakaianatas items
    function hideAllExtraPakaianatasItems() {
        for (let i = 5; i < pakaianatasItems.length; i++) {
            pakaianatasItems[i].style.display = "none";
        }
        hideAllBtn.style.display = "none"; // Hide the "Sembunyikan" button
        showAllBtn.style.display = "block"; // Show the "Tampilkan Semua" button
    }

    // Hide pakaianatas items on page load
    hideExtraPakaianatasItems();

    // Event listener for "Tampilkan Semua" button
    showAllBtn.addEventListener("click", function () {
        showAllPakaianatasItems();
    });

    // Event listener for "Sembunyikan" button
    hideAllBtn.addEventListener("click", function () {
        hideAllExtraPakaianatasItems();
    });
});


//PAKAIAN BAWAH//
document.addEventListener("DOMContentLoaded", function () {
    const showAllBtnbawah = document.getElementById("showAllBtnbawah");
    const hideAllBtnbawah = document.getElementById("hideAllBtnbawah");
    const pakaianbawahItems = document.querySelectorAll(".pakaianbawah > div");

    // Function to hide pakaianbawah items starting from index 5
    function hideExtraPakaianbawahItems() {
        for (let i = 5; i < pakaianbawahItems.length; i++) {
            pakaianbawahItems[i].style.display = "none";
        }
    }

    // Function to show all pakaianbawah items
    function showAllPakaianbawahItems() {
        pakaianbawahItems.forEach((item) => {
            item.style.display = "block";
        });
        hideAllBtnbawah.style.display = "block"; // Show the "Sembunyikan" button
        showAllBtnbawah.style.display = "none"; // Hide the "Tampilkan Semua" button
    }

    // Function to hide all extra pakaianbawah items
    function hideAllExtraPakaianbawahItems() {
        for (let i = 5; i < pakaianbawahItems.length; i++) {
            pakaianbawahItems[i].style.display = "none";
        }
        hideAllBtnbawah.style.display = "none"; // Hide the "Sembunyikan" button
        showAllBtnbawah.style.display = "block"; // Show the "Tampilkan Semua" button
    }

    // Hide pakaianbawah items on page load
    hideExtraPakaianbawahItems();

    // Event listener for "Tampilkan Semua" button
    showAllBtnbawah.addEventListener("click", function () {
        showAllPakaianbawahItems();
    });

    // Event listener for "Sembunyikan" button
    hideAllBtnbawah.addEventListener("click", function () {
        hideAllExtraPakaianbawahItems();
    });
});


//ALAS KAKI//
document.addEventListener("DOMContentLoaded", function () {
    const showAllBtnalaskaki = document.getElementById("showAllBtnalaskaki");
    const hideAllBtnalaskaki = document.getElementById("hideAllBtnalaskaki");
    const alaskakiItems = document.querySelectorAll(".alaskaki > div");

    // Function to hide alaskaki items starting from index 5
    function hideExtraAlaskakiItems() {
        for (let i = 5; i < alaskakiItems.length; i++) {
            alaskakiItems[i].style.display = "none";
        }
    }

    // Function to show all alaskaki items
    function showAllAlaskakiItems() {
        alaskakiItems.forEach((item) => {
            item.style.display = "block";
        });
        hideAllBtnalaskaki.style.display = "block"; // Show the "Sembunyikan" button
        showAllBtnalaskaki.style.display = "none"; // Hide the "Tampilkan Semua" button
    }

    // Function to hide all extra alaskaki items
    function hideAllExtraAlaskakiItems() {
        for (let i = 5; i < alaskakiItems.length; i++) {
            alaskakiItems[i].style.display = "none";
        }
        hideAllBtnalaskaki.style.display = "none"; // Hide the "Sembunyikan" button
        showAllBtnalaskaki.style.display = "block"; // Show the "Tampilkan Semua" button
    }

    // Hide alaskaki items on page load
    hideExtraAlaskakiItems();

    // Event listener for "Tampilkan Semua" button
    showAllBtnalaskaki.addEventListener("click", function () {
        showAllAlaskakiItems();
    });

    // Event listener for "Sembunyikan" button
    hideAllBtnalaskaki.addEventListener("click", function () {
        hideAllExtraAlaskakiItems();
    });
});