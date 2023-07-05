var approw = document.getElementById("row");
async function getListApprenants(){
    const response = await fetch("fonction.php?app=all", {
        method: "GET"
    });
    console.log(response);
}
getListApprenants();