<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm p-5 bg-white rounded-md">
        <h2 class=" text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Color Information</h2>
        <form class="space-y-6" onsubmit="return submitForm(event);">
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Color</label>
                <div class="mt-2">
                    <input id="color" name="color" type="text" autocomplete="email" required
                           class="p-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
        </form>

        <div id="response_color">
            <!-- response will be displayed here -->
        </div>

    </div>
</div>

</body>

<script>
    function getColor() {
        let template = `
            <h1 class="text-2xl font-bold tracking-tight text-gray-900 pt-5">Color Match</h1>
            <table class="table-auto" id="respons_template">
                <tr>
                    <th class="pr-4 py-2 text-left">Name:</th>
                    <td class="pr-4 py-2 text-left">/name/</td>
                </tr>
                <tr>
                    <th class="pr-4 py-2 text-left">HEX:</th>
                    <td class="pr-4 py-2 text-left">/hex/</td>
                </tr>
                <tr>
                    <th class="pr-4 py-2 text-left">rgb:</th>
                    <td class="pr-4 py-2 text-left">/rgb/</td>
                </tr>
            </table>
        `;

        //document.getElementById("getColor").addEventListener("click", function () {
        let color = document.getElementById('color').value;

        if (color !== '') {

            let url = '{{ URL::to('/') }}/api/color/' + color;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    if (data.message === "Color not found") {
                        document.getElementById("response_color").innerHTML = `<h1 class="text-2xl font-bold tracking-tight text-gray-900 pt-5">Color not found!</h1>`;
                        return;
                    }

                    //replace the table content with the data
                    template = template.replace("/name/", data.data.name);
                    template = template.replace("/hex/", data.data.hex_code);
                    template = template.replace("/rgb/", data.data.rgb_code);

                    //display the table
                    document.getElementById("response_color").innerHTML = template;

                    //change body background color according to the color
                    document.getElementsByTagName("body")[0].style.backgroundColor = data.data.name;
                }).catch(error => console.log("Unable to fetch data:", error));
        }

        // });
    }

    // initialize the function for the button
    document.getElementById("getColor").onclick = getColor;

</script>

</html>
