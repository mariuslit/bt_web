<html>
    <head>
        <script defer src="scriptGycio.js"></script>
        
        <style>
            table, th, tr, td {
                border: 1px solid lightgrey;
                border-collapse: collapse;
            }
            
            table {
                width: 800px;
                margin-top: 50px;
            }
            
            #loader {
                border-top: 3px solid black;
                box-sizing: border-box;
                width: 32px;
                height: 32px;
                position: fixed;
                right: 10px;
                top: 10px;
                animation: spin 0.5s infinite linear;
                border-radius: 50%;
                display: none;
            }
            
            @keyframes spin {
                from {
                    transform: rotate(0deg);
                }
                
                to {
                    transform: rotate(360deg);
                }
            }
        </style>
    </head>
    <body>
        <input id="input">
        <button id="button">GET DATA</button>
        
        <div id="loader"></div>
        
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Website</th>
                </tr>
            </thead>
            
            <tbody id="table">
                
            </tbody>
        </table>
        
        
    <div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website&amp;utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"  alt="www.000webhost.com"></a></div></body>
</html>