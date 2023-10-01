<!DOCTYPE html>
<html>

<head>
    @include('bootstrapheaders')
    @include('nav')

</head>

<body>
    <div style="background-color:#22394a">
        <div class="p-3 d-flex" style="background-image: url('/hotproject.jpeg');"">
            <div class="item-photo flex-grow-1">
                <div>
                    <img style="max-height: 75px" src="centrume.png" />
                </div>
                <div style="color:#22394a"><strong class="bg-light p-1 shadow shadow-md rounded">Jl. Pakujaya No.66,
                        RT.2/RW.5 Paku Jaya, Kec. Serpong Utara, Kota
                        Tangerang Selatan, Banten
                        15326</strong>
                </div>

                <div style="color:#22394a" class="my-3"><strong class="bg-light p-1 shadow shadow-md rounded">Phone:
                        0877 7177 9430</strong></div>
                <div style="color:#22394a" class="my-3"><strong class="bg-light p-1 shadow shadow-md rounded">Email:
                        Yusufsetiadi66@gmail.com</strong></div>

            </div>
            <div class="flex-grow-1">
                <div><strong>Name</strong></div>
                <div><input placeholder="Name..." class="form-control form-control-sm" /></div>
                <div><strong>Email</strong></div>
                <div><input placeholder="Email..." class="form-control form-control-sm" /></div>

                <div><strong>Phone</strong></div>
                <div><input placeholder="Phone..." class="form-control form-control-sm" /></div>

                <div><strong>Message</strong></div>
                <div><input placeholder="Message..." class="form-control form-control-sm" /></div>

                <div><button class="btn text-light" style="background-color:#22394a">Send Message</button></div>
            </div>

        </div>

        <div class="my-3 text-light d-flex flex-column align-items-center justify-content-center">
            <div>
                <h4>C E N T R U M E</h4>
            </div>
            <div><strong>Jl. Pakujaya No.66, RT.2/RW.5, Paku Jaya, Kec. Serpong Utara, Kota Tangerang Selatan, Banten
                    15326</strong>
            </div>
            <div><strong>Phone: 0877 7177 9430 | Email: Yusufsetiadi66@gmail.com</strong></div>
        </div>

        @include('bootstrapjs')
</body>

</html>

<style>
    @media only screen and (min-width: 768px) {
        .item-photo {
            max-width: 50vw !important;
        }
    }
</style>
@include('font')
