<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="dashboard/assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        My Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset("dashboard/assets/css/placeholder-loading.css")}}" rel="stylesheet" />
</head>
<body>
<div class="container mt-5" style="width: 1200px">
    <div class="row">
        <div class="col-2">
            <div class="ph-item">
                <div class="ph-avatar"></div>
                <div class="ph-row">
                    <div class="ph-col-4">
                        <div class="ph-col-12"></div>
                    </div>

                </div>
            </div>
            @for($i=1;$i<=3;$i++)
                <div class="ph-item">
                    <div class="ph-row">
                        <div class="ph-col-4">
                            <div class="ph-col-12"></div>
                        </div>

                    </div>
                </div>
            @endfor


        </div>
        <div class="col-8">
            <div class="ph-item">
                <div class="ph-col-12">
                    <div class="ph-picture"></div>
                    @for($i=1;$i<=15;$i++)
                        <div class="ph-row">
                        <div class="ph-col-12"></div>
                    </div>
                    @endfor

                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
