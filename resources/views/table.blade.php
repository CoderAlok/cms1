<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn3.devexpress.com/jslib/21.2.7/js/dx.all.js"></script>

    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/21.2.7/css/dx.common.css" />
    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/21.2.7/css/dx.light.css" />

    <style>
        .options {
            margin-top: 20px;
            padding: 20px;
            background-color: rgba(191, 191, 191, 0.15);
            position: relative;
        }

        .caption {
            font-size: 18px;
            font-weight: 500;
        }

        .option {
            margin-top: 10px;
        }

        .checkboxes-mode {
            position: absolute;
            right: 20px;
            bottom: 20px;
        }

        .option>.dx-selectbox {
            width: 150px;
            display: inline-block;
            vertical-align: middle;
        }

        .option>span {
            margin-right: 10px;
        }

    </style>

    <script>
        $(() => {
            const dataGrid = $('#grid-container').dxDataGrid({
                dataSource: sales,
                keyExpr: 'orderId',
                showBorders: true,
                selection: {
                    mode: 'multiple',
                },
                paging: {
                    pageSize: 10,
                },
                filterRow: {
                    visible: true,
                },
                columns: [{
                        dataField: 'orderId',
                        caption: 'Order ID',
                        width: 90,
                    },
                    'city', {
                        dataField: 'country',
                        width: 180,
                    },
                    'region', {
                        dataField: 'date',
                        dataType: 'date',
                    }, {
                        dataField: 'amount',
                        format: 'currency',
                        width: 90,
                    }
                ],
            }).dxDataGrid('instance');

            $('#select-all-mode').dxSelectBox({
                dataSource: ['allPages', 'page'],
                value: 'allPages',
                onValueChanged(data) {
                    dataGrid.option('selection.selectAllMode', data.value);
                },
            });

            $('#show-checkboxes-mode').dxSelectBox({
                dataSource: ['none', 'onClick', 'onLongTap', 'always'],
                value: dataGrid.option('selection.showCheckBoxesMode'),
                onValueChanged(data) {
                    dataGrid.option('selection.showCheckBoxesMode', data.value);
                    $('#select-all-mode').dxSelectBox('instance').option('disabled', data.value === 'none');
                },
            });
        });

    </script>

    <script>
        const sales = [{
            orderId: 10248,
            region: 'North America',
            country: 'United States',
            city: 'New York',
            amount: 1740,
            date: '2013/01/06',
        }, {
            orderId: 10249,
            region: 'North America',
            country: 'United States',
            city: 'Los Angeles',
            amount: 850,
            date: '2013/01/13',
        }, {
            orderId: 10250,
            region: 'North America',
            country: 'United States',
            city: 'Denver',
            amount: 2235,
            date: '2013/01/07',
        }, {
            orderId: 10251,
            region: 'North America',
            country: 'Canada',
            city: 'Vancouver',
            amount: 1965,
            date: '2013/01/03',
        }, {
            orderId: 10252,
            region: 'North America',
            country: 'Canada',
            city: 'Edmonton',
            amount: 880,
            date: '2013/01/10',
        }, {
            orderId: 10887,
            region: 'Africa',
            country: 'Egypt',
            city: 'Cairo',
            amount: 500,
            date: '2015/05/26',
        }, {
            orderId: 10888,
            region: 'South America',
            country: 'Argentina',
            city: 'Buenos Aires',
            amount: 780,
            date: '2015/05/07',
        }];
    </script>
</head>

<body>

    <div class="dx-viewport demo-container">
        <div id="grid">
            <div id="grid-container"></div>
            <div class="options">
                <div class="caption">Options</div>
                <div class="option">
                    <span>Select All Mode</span>
                    <div id="select-all-mode"></div>
                </div>
                <div class="option checkboxes-mode">
                    <span>Show Checkboxes Mode</span>
                    <div id="show-checkboxes-mode"></div>
                </div>
            </div>
        </div>
    </div>

</body>

<script>
    // $(document).ready(function() {
    //     $('.fancybox').fancybox();
    // });
</script>

</html>
