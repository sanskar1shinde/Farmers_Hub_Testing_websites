// DOM elements
const contentDiv = document.getElementById("content");
const adminLi = document.getElementById("admin");
const farmerLi = document.getElementById("farmer");
const viewFarmersLi = document.getElementById("view-farmers");
const addFarmersLi = document.getElementById("add-farmers");
const customersLi = document.getElementById("customers");
const viewCustomersLi = document.getElementById("view-customers");
const addCustomersLi = document.getElementById("add-customers");
const productsLi = document.getElementById("products");
const signOutButton = document.getElementById("sign-out");

// Event listeners
adminLi.addEventListener("click", () => showContent("Admin content"));
viewFarmersLi.addEventListener("click", () => showContent("View Farmers content"));
addFarmersLi.addEventListener("click", () => showContent("Add Farmers content"));
viewCustomersLi.addEventListener("click", () => showContent("View Customers content"));
addCustomersLi.addEventListener("click", () => showContent("Add Customers content"));
productsLi.addEventListener("click", () => showContent("Products content"));
signOutButton.addEventListener("click", () => alert("Sign out clicked"));

// Function to show content in the main area
function showContent(content) {
    contentDiv.textContent = content;
}
