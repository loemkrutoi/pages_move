let btn = document.getElementById('btn');
let page = document.getElementById('page');
let pageKey = document.getElementById('pageKey');

btn.addEventListener('click', async function (event){
    event.preventDefault();
    try{
        if(page.value != '' && pageKey.value != ''){
            console.log(page.value);
            let query = await fetch('addPage.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                body: new URLSearchParams({page: page.value, pageKey: pageKey.value + '.php'})
            });
            let response = await query.text();
            console.log(response);
            location.replace('admin.php');
        }
    }
    catch (error) {
        console.log(error);
    }
});