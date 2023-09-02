<!DOCTYPE html>
<html>

<head>
    @include('bootstrapheaders')
    @include('nav')

</head>

<body>
    <div style="background-color:darkblue">
        <div>
            <div style="background-color:grey"
                class="d-flex flex-wrap m-3 py-5 justify-content-around align-items-center">
                <div class="d-flex justify-content-center flex-grow-1">
                    <div class="p-4 rounded rounded-lg" style="background-color:darkblue">
                        <h4 style="color:orange">Welcome</h4>
                        <div style="color:white"><strong>Transforming Spaces,</strong></div>
                        <div style="color:white"><strong>Enhancing Lives</strong></div>
                    </div>
                </div>

                <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1 ">
                    <h4 class="text-light">Carousel here</h4>
                    <div class="d-flex w-100 justify-content-end">
                        <div class="bg-light d-flex justify-content-center align-items-center">
                            <div class="bg-success text-light m-2">
                                <strong>Logo WA</strong>
                            </div>
                            <div class="px-3"><strong>Hi, ada yang bisa kami bantu?</strong></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('bootstrapjs')
</body>

</html>
