<!DOCTYPE html>
<html>

<head>
    @include('bootstrapheaders')
    @include('nav')

</head>

<body style="background-color:#22394a">
    <a href="{{ $data['adminsetting']['whatsapp_number'] }}" target="_blank">

        <div style="position: fixed; z-index: 2; bottom:15vh; right: 0"
            class="border border-secondary shadow shadow-md rounded rounded-lg bg-light d-flex justify-content-center align-items-center">
            <div class="bg-success text-light m-2">
                <img style="max-width: 25px" src="wa.png" />
            </div>
            <div class="px-3"><strong>Hi, ada yang bisa kami bantu?</strong></div>
        </div>
    </a>

    <div>
        <div>
            <div {{-- style="background-color:#8d8884" --}}
                class="d-flex flex-wrap py-5 justify-content-around align-items-center height-projects-only-desktop"
                style="background-image: url('/front2.jpeg'); background-size: cover;">
                <div class="d-flex justify-content-center flex-grow-1">
                    <div class="p-4 rounded rounded-lg" style="background-color:#22394a; opacity: 0.8">
                        <h4 style="color:orange">Welcome</h4>
                        <div style="color:white"><strong>Transforming Spaces,</strong></div>
                        <div style="color:white"><strong>Enhancing Lives</strong></div>
                    </div>
                </div>

                <div class="layout-flex-desktop-carousel flex-grow-1 overflow-auto halfscrollable">
                    @for ($i = 0; $i < count($data['projects']); $i++)
                        <div class="m-4">
                            <div class="item-photo" style=" background-color: grey; color: white">
                                <img style="max-width: 100%"
                                    src="/api/projects/{{ $data['projects'][$i]?->id }}/photo" />
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <div class="m-3">
                <div class="my-3 p-3" style="background-image: url('/hotproject2.jpeg'); color: #8B8000">
                    <h4>Hot Projects </h4>
                </div>

                <div class="d-flex justify-content-center flex-wrap">
                    @for ($i = 0; $i < count($data['hot_projects']); $i++)
                        <div class="hot-projects-width m-3" style="cursor: pointer">
                            <a href="/portofolio">

                                <div style=" background-color: grey; color: white">
                                    <img style="max-width: 100%"
                                        src="/api/projects/{{ $data['projects'][$i]?->id }}/photo" />
                                </div>
                            </a>

                        </div>
                    @endfor
                </div>

                <div class="d-flex align-items-center justify-content-center flex-wrap">
                    <div class="d-flex flex-column align-items-center justify-content-center  flex-grow-1">
                        <div style="background-color: #d3d7db" class="bg-light rounded rounded-md p-3"><strong>Why
                                CENTRUME_ind?</strong></div>

                        <div>
                            <div>
                                <img style="max-width: 400px" src="leftpic.png" />
                            </div>
                        </div>
                    </div>
                    <div class="p-3 d-flex align-items-center flex-wrap flex-grow-1">
                        <div class="why-centrume mx-1 text-light flex-grow-1">
                            <div
                                class="d-flex flex-column align-items-center justify-content-center p-2 border border-light border-4 rounded my-2">

                                <div>
                                    <img style="max-width: 200px" src="professional.png" />
                                </div>
                                <div>
                                    <strong>Professional Team</strong>
                                </div>
                                <div>
                                    <ul>
                                        <li>Berpengalaman lebih dari 1 tahun</li>
                                        <li>Memiliki tim yang berpengelaman di bidangnya</li>
                                        <li>Konsultasi dan survey gratis</li>

                                    </ul>
                                </div>
                            </div>
                            <div
                                class="d-flex flex-column align-items-center justify-content-center p-2 border border-light border-4 rounded my-2">

                                <div>
                                    <img style="max-width: 200px" src="workshop.png" />
                                </div>
                                <div> <strong>We Have Our Own Workshop</strong>
                                </div>
                                <div>
                                    <div>
                                        <ul>
                                            <li>Memiliki workshop sendiri</li>
                                            <li>Kualitas bahan terjamin</li>
                                            <li>Pengerjaan menggunakan mesin sehingga lebih praktis</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="why-centrume mx-1 text-light flex-grow-1">
                            <div
                                class="d-flex flex-column align-items-center justify-content-center p-2 border border-light border-4 rounded">
                                <div>
                                    <img style="max-width: 200px" src="warranty.png" />
                                </div>
                                <div>
                                    <strong>Project Warranty</strong>
                                </div>
                                <div>
                                    <ul>
                                        <li>Harga sudah termasuk biaya pemasangan</li>
                                        <li>Include print dan backsplash 5cm</li>
                                        <li>Pengiriman Jabodetabek</li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('bootstrapjs')
</body>

</html>


<style>
    @media only screen and (min-width: 768px) {
        .why-centrume {
            width: 20vw !important;
        }
    }

    @media only screen and (min-width: 768px) {
        .item-photo {
            width: 17vw !important;
        }
    }

    @media only screen and (min-width: 768px) {
        .layout-flex-desktop-carousel {
            display: flex !important;
            justify-content: center;
            align-items: center;
        }
    }

    @media only screen and (min-width: 768px) {
        .height-projects-only-desktop {
            height: 75vh !important;
        }
    }


    @media only screen and (min-width: 768px) {
        .hot-projects-width {
            width: 25vw !important;
        }
    }

    @media only screen and (min-width: 768px) {
        .halfscrollable {
            width: 30vw !important;
        }
    }
</style>
@include('font')
