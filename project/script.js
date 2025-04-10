//Edit Form and update--------------------------------------------------
const EditFloating_form = document.getElementById("floating-edit-form");
const EditCloseForm_button = document.getElementById("close-editform-button");

async function fetchProductData(productID){
    try{
        const response = await fetch(`getProductData.php?id=${productID}`);
        const data = await response.json();

        if(data.error){
            alert(data.error);
        }
        else{
            document.getElementById('editproduct-id').value = data.P_ID;
            document.getElementById('editproduct-name').value = data.P_Name;
            document.getElementById('editproduct-category').value = data.P_Category;
            document.getElementById('editproduct-quantity').value = data.P_Quantity;
            document.getElementById('editproduct-price').value = data.P_Price;

            EditFloating_form.style.display = "flex";
        }
   }
   catch (error){
    console.error('Error fetching product data:', error);
    alert('An eror ocuured while fetching product data.');
   }

}

document.addEventListener("click", (event) => {
    if(event.target.classList.contains("open-edit-button")){
        const productID = event.target.getAttribute("data-id");
        if(productID){
            fetchProductData(productID);
        }
    }
});

EditCloseForm_button.addEventListener("click", () => {
    EditFloating_form.style.display = "none";
});

window.addEventListener("click", (event) => {
    if(event.target === EditFloating_form){
        EditFloating_form.style.display = "none";
    }
});
//Edit Form--------------------------------------------------

//Add Form--------------------------------------------------
const openAddForm_button = document.getElementById("open-add-button");
const AddFloating_form = document.getElementById("floating-add-form");
const AddcloseForm_button = document.getElementById("close-addform-button");

openAddForm_button.addEventListener("click", () => {
    AddFloating_form.style.display = "flex";
});

AddcloseForm_button.addEventListener("click", () => {
    AddFloating_form.style.display = "none";
});

//closes the form when clicking outside of it
window.addEventListener("click", (event) => {
    if(event.target === AddFloating_form){
        AddFloating_form.style.display = "none";
    }
});
//Add Form--------------------------------------------------

//Delete--------------------------------------------------
function confirmDelete(productID){
    if(confirm("Are you sure you want to delete this product?")){

        window.location.href = "deleteproduct.php?id=" + productID;
    }
}

//Delete--------------------------------------------------


