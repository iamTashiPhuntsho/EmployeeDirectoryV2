<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="https://balkan.app/js/OrgChart.js"></script>
    </head>
    <style>
        /*CSS*/
html, body {
    margin: 0px;
    padding: 0px;
    width: 100%;
    height: 100%;
    overflow: hidden;
    font-family: Helvetica;
}

#tree {
    width: 100%;
    height: 100%;
}


/*partial*/
.node.QA rect {
    fill: #F57C00;
}

.node.Dev rect {
    fill: #039BE5;
}

.node.Marketing rect {
    fill: #FFCA28;
}
    </style>
    <body id="body-pd" class="font-sans antialiased">
    <div id="tree"></div>
   
      



    </body>

    <script>
        //JavaScript


var nodes = [
    { id: "1", name: " ", title: "Board Directors"},
    { id: "2", pid: "1", name: "", title: "Board Audit Committee", email: "ava@domain.com", img: "https://cdn.balkan.app/shared/2.jpg"},
    { id: "3", pid: "1", name: "", title: "Board Governance Committee", img: "https://cdn.balkan.app/shared/3.jpg" },
    { id: "4", pid: "1", name: "Sonam Tobgay", title: "Chief Executive officer", email: "jay@domain.com", img: "https://cdn.balkan.app/shared/4.jpg" },
    { id: "5", pid: "1", name: "", title: "Board Credit Committee", email: "jay@domain.com", img: "https://cdn.balkan.app/shared/4.jpg" },
    { id: "6", pid: "1", name: "", title: "Board Risk Committee", email: "jay@domain.com", img: "https://cdn.balkan.app/shared/4.jpg" },
    
    { id: "7", pid: "4", name: "Dorji", title: "Director Corporate service", email: "kohen@domain.com", img: "https://cdn.balkan.app/shared/8.jpg" },
    
    { id: "8", pid: "4", name: "Dorji Namgyal Rinchhen", title: "Director Customer Experience", img: "https://cdn.balkan.app/shared/9.jpg" },
    { id: "9", pid: "4", name: "Hem Kumar Acharya", title: " Director Banking Operations", img: "https://cdn.balkan.app/shared/9.jpg" },
    
    { id: "10", pid: "7", name: "Chhoe Dhen", title: "Chief Finance", email: "kohen@domain.com", img: "https://cdn.balkan.app/shared/8.jpg" },
    { id: "11", pid: "8", name: "Man Bahadur Rai", title: " Chief, Digital Transformation Department", email: "kohen@domain.com", img: "https://cdn.balkan.app/shared/8.jpg" },
    { id: "12", pid: "9", name: "Karma Deki", title: "Chief, Branch Operations", email: "kohen@domain.com", img: "https://cdn.balkan.app/shared/8.jpg" },
    { id: "13", pid: "7", name: "Singye Dorji", title: "Chief,Human Resources and Administration Department", email: "kohen@domain.com", img: "https://cdn.balkan.app/shared/8.jpg" },
    { id: "14", pid: "13", name: "empty", title: "", email: "kohen@domain.com", img: "https://cdn.balkan.app/shared/8.jpg" },
    { id: "15", pid: "8", name: "Kelden Dorji", title: "Chief, Customer Services", email: "kohen@domain.com", img: "https://cdn.balkan.app/shared/8.jpg" },
    { id: "16", pid: "15", name: "empty", title: " ", email: "kohen@domain.com", img: "https://cdn.balkan.app/shared/8.jpg" },
    { id: "17", pid: "9", name: "Deki Wangmo", title: "Chief, Remedial", email: "kohen@domain.com", img: "https://cdn.balkan.app/shared/8.jpg" },
    { id: "18", pid: "8", name: "Yonten Jamtsho", title: "Chief, IT Operations", email: "kohen@domain.com", img: "https://cdn.balkan.app/shared/8.jpg" },
    { id: "19", pid: "17", name: "empty", title: "empty", email: "kohen@domain.com", img: "https://cdn.balkan.app/shared/8.jpg" },

   

    
    
];

for (var i = 0; i < nodes.length; i++) {
    var node = nodes[i];
    switch (node.title) {
        case "QA":
            node.tags = ["QA"];
            break;
        case "Marketer":
        case "Designer":
        case "Sales Manager":
            node.tags = ["Marketing"];
            break;
    }
}

var chart = new OrgChart(document.getElementById("tree"), {    
    
    enableSearch: false,
    mode: 'dark',
    layout: OrgChart.mixed,
    nodeBinding: {
        field_0: "title",
        field_1: "name",
        img_0: "img"
    },
    nodes: nodes
});
    </script>
</html>