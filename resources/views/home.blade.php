<!DOCTYPE html>
<html>

<head>
    @include('bootstrapheaders')
    @include('nav')

</head>

<body style="background-color:#22394a" >
    <dialog  id="main-dialog" style="min-width: 75vw; position: sticky; top: 20vh; z-index: 1; opacity: 0.95" class="bg-light">
        <div>
            <div>
                <button class="btn btn-sm btn-danger" onclick="(() => {
                    document.getElementById('main-dialog').removeAttribute('open');
                })()">Close</button>
            </div>


            <div class="p-1 bg-light">
                <div id="img-detail" class="d-flex justify-content-center"></div>
                <div id="img-detail-photos" class="d-flex justify-content-center"></div>

                <div style="border: 1.5px solid gold;"></div>


                <div id="project-detail">Project: </div>
                <div id="location-detail">Location: </div>
                <div id="material-detail">Material: </div>
                <div id="area-detail">Area: </div>
            </div>


        </div>
    </dialog>

    <a href="https://wa.me/{{ $data['adminsetting']['whatsapp_number'] }}" target="_blank">

        <div style="position: fixed; z-index: 2; bottom:15vh; right: 0" class="border border-secondary shadow shadow-md rounded rounded-lg bg-light d-flex justify-content-center align-items-center">
            <div class="bg-success text-light m-2">
                <img style="max-width: 25px" src="wa.png" />
            </div>
            <div class="px-3"><strong>Hi, ada yang bisa kami bantu?</strong></div>
        </div>
    </a>

    <div>
        <div>
            <div {{-- style="background-color:#8d8884" --}} class="d-flex flex-wrap py-5 justify-content-around align-items-center height-projects-only-desktop" style="background-image: url('/front2.jpeg'); background-size: cover;">
                <div class="d-flex justify-content-center flex-grow-1">
                    <div class="p-4 rounded rounded-lg" style="background-color:#22394a; opacity: 0.8">
                        <h4 style="color:orange">Welcome</h4>
                        <div style="color:white"><strong>Transforming Spaces,</strong></div>
                        <div style="color:white"><strong>Enhancing Lives</strong></div>
                    </div>
                </div>

                <div class="layout-flex-desktop-carousel flex-grow-1 overflow-auto halfscrollable">
                    @for ($i = 0; $i < count($data['production_process_photos']); $i++) <div class="m-4">
                        <div class="item-photo" style=" background-color: grey; color: white">
                            <img style="width: 100%; max-height: 20vh;" src="/api/prod_process_photos_photo/{{ $data['production_process_photos'][$i]?->id }}" />
                        </div>
                </div>
                @endfor
            </div>
        </div>

        <div class="my-3 p-3" style="background-image: url('/hotproject2.jpeg'); color: #8B8000; min-height: 15vh">
            <h3>Hot Projects </h3>
        </div>


        <div class="m-3">

            <div class="d-flex justify-content-center flex-wrap">
                @for ($i = 0; $i < count($data['hot_projects']); $i++) <div class="hot-projects-width m-3" style="cursor: pointer">
                    <!-- <a href="/portofolio"> -->

                    <div class="d-flex justify-content-center" style=" color: white; position: relative; object-fit: cover;">
                        <img style="max-width: 100%; height: 60vh; object-fit: cover;" src="/api/projects/{{ $data['projects'][$i]?->id }}/photo" />
                        <button class="btn btn-sm btn-primary" style="position: absolute; bottom: 10px; left: 40%; background-color:#22394a; color: gold;" onclick="(()=> {

                            const d = JSON.parse (document.getElementById('data').value)
                            const index = {{$i}};

                            document.getElementById('main-dialog').setAttribute('open','');
                            // document.getElementById('img-detail').innerHTML= `<img style='max-width: 75vw; max-height: 50vh' src='/api/projects/{{ $data['projects'][$i]?->id }}/photo' />`;

                            document.getElementById('img-detail-photos').innerHTML= 
                                `<div class='d-flex'>
                                    ${d[index]?.project_photos?.map(p=>{return (
                                        `<div class='m-2'>
                                            <div class='item-photo' style='background-color: grey; color: white;width: 25vw; height: 20vh;'>
                                                <img style='max-width: 100%; max-height: 20vh' src='/api/project_photos/${p?.id}/photo' />
                                            </div>
                                        </div>`
                                    )}).join('')}
                                </div>`;
                            document.getElementById('project-detail').innerHTML= 'Project: {{$data['projects'][$i]?->name}}';
                            document.getElementById('location-detail').innerHTML= 'Location: {{$data['projects'][$i]?->location }}';
                            document.getElementById('material-detail').innerHTML= 'Material: {{$data['projects'][$i]?->material}}';
                            document.getElementById('area-detail').innerHTML= 'Area: {{$data['projects'][$i]?->area}}';



                                                                    

                            })()">View More</button>
                    </div>
                    <!-- </a> -->

            </div>
            @endfor
        </div>

        <div class="d-flex align-items-center justify-content-center flex-wrap">
            <div class="d-flex flex-column align-items-center justify-content-center  flex-grow-1">
                <div style="background-color: #d3d7db" class="bg-light rounded rounded-md p-3"><strong>Why
                        DMG_Marmergranit?</strong></div>

                <div>
                    <div>
                        <img style="max-width: 400px" src="leftpic.png" />
                    </div>
                </div>
            </div>
            <div class="p-3 d-flex align-items-center flex-wrap flex-grow-1">
                <div class="why-centrume mx-1 text-light flex-grow-1">
                    <div class="d-flex flex-column align-items-center justify-content-center p-2 rounded my-2" style="border: 8px solid white;">

                        <div>
                            <img style="max-width: 200px" src="professional.png" />
                        </div>
                        <div>
                            <strong>Professional Team</strong>
                        </div>
                        <div>
                            <ul>
                                <li>Berpengalaman lebih dari 10 tahun</li>
                                <li>Memiliki tim yang berpengelaman di bidangnya</li>
                                <li>Konsultasi dan survey gratis</li>

                            </ul>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center p-2 border-4 rounded my-2" style="border: 8px solid white;">

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
                    <div class="d-flex flex-column align-items-center justify-content-center p-2  border-4 rounded" style="border: 8px solid white;">
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

    <!-- Portofolio Page -->
    <div id="portofolio-page">
        <input style="display: none;" id="data" value="{{ $data['projects'] }}" />

        <div style="background-color:#22394a; min-height: 100vh">
            <h4 class="text-light p-2">Our Projects</h4>
            <div style="border: 1px solid gold;"></div>
            <div class="container">


                <div class="d-flex flex-wrap">
                    @for ($i = 0; $i < count($data['projects']); $i++) <div class="m-4">
                        <div class="item-photo" style=" background-color: grey; color: white;width: 25vw; height: 20vh;">
                            <img style="height: 20vh; width: 100%;" src="/api/projects/{{ $data['projects'][$i]?->id }}/photo" />a
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center bg-light">
                            <div class="p-1"><button class="btn btn-sm" style="background-color:#22394a; color: gold" onclick="(()=> {

                                        const d = JSON.parse (document.getElementById('data').value)
                                        const index = {{$i}};

                                        document.getElementById('main-dialog').setAttribute('open','');
                                        // document.getElementById('img-detail').innerHTML= `<img style='max-width: 75vw; max-height: 50vh' src='/api/projects/{{ $data['projects'][$i]?->id }}/photo' />`;
                                        
                                        document.getElementById('img-detail-photos').innerHTML= 
                                            `<div class='d-flex'>
                                                ${d[index]?.project_photos?.map(p=>{return (
                                                    `<div class='m-2'>
                                                        <div class='item-photo' style='background-color: grey; color: white;width: 25vw; height: 20vh;'>
                                                            <img style='width: 100%; max-height: 20vh' src='/api/project_photos/${p?.id}/photo' />
                                                        </div>
                                                    </div>`
                                                )}).join('')}
                                            </div>`;
                                        document.getElementById('project-detail').innerHTML= 'Project: {{$data['projects'][$i]?->name}}';
                                        document.getElementById('location-detail').innerHTML= 'Location: {{$data['projects'][$i]?->location }}';
                                        document.getElementById('material-detail').innerHTML= 'Material: {{$data['projects'][$i]?->material}}';
                                        document.getElementById('area-detail').innerHTML= 'Area: {{$data['projects'][$i]?->area}}';

                                      
                                        
                                                                                

                                    })()">View
                                    More</button></div>
                            {{-- <div>
                                <strong>Project: {{ $data['projects'][$i]?->name }}</strong>
                        </div>
                        <div>
                            <strong>Location: {{ $data['projects'][$i]?->location }}</strong>
                        </div>
                        <div>
                            <strong>Mat: {{ $data['projects'][$i]?->material }}</strong>
                        </div> --}}

                </div>

            </div>
            @endfor
        </div>
    </div>
    </div>
    </div>


    <!-- Contact Page -->

    <div id="contact-page">
        <div>
            <input id="data" style="display: none" value="{{ json_encode( $data) }}" />
            <div class="p-3 d-flex" style="background-image: url('/hotproject.jpeg'); height: 100vh;"">
            <div class=" item-photo flex-grow-1">
                <div>
                    <img style="max-height: 75px" src="centrume.png" />
                </div>
                <div style="color:#22394a"><strong class="p-1">Jl. Pakujaya No.66,
                        RT.2/RW.5 Paku Jaya, Kec. Serpong Utara, Kota
                        Tangerang Selatan, Banten
                        15326</strong>
                </div>

                <div style="color:#22394a" class="my-3"><strong class="p-1">Phone:
                        0877 7177 9430</strong></div>
                <div style="color:#22394a" class="my-3"><strong class="p-1" class="p-1">Email:
                        Yusufsetiadi66@gmail.com</strong></div>

            </div>
            <div class="flex-grow-1">

                <div class="d-flex my-1 rounded" style="background: rgba(0,0,0,0.5); background-color: lightgrey; opacity: 0.6">
                    <div class="px-1"><strong>Name</strong></div><input oninput="handleChangeName(this)" style="background-color: transparent;" placeholder="..." class="form-control form-control-sm" />
                </div>
                <div class="d-flex my-1 rounded" style="background: rgba(0,0,0,0.5); background-color: lightgrey; opacity: 0.6">
                    <div class="px-1"><strong>Email</strong></div>
                    <input oninput="handleChangeEmail(this)" style="background-color: transparent;" placeholder="..." class="form-control form-control-sm" />
                </div>

                <div class="d-flex my-1 rounded" style="background: rgba(0,0,0,0.5); background-color: lightgrey; opacity: 0.6">
                    <div class="px-1"><strong>Phone</strong></div>
                    <input oninput="handleChangePhone(this)" style="background-color: transparent;" placeholder="..." class="form-control form-control-sm" />
                </div>

                <div class="d-flex my-1 rounded" style="background: rgba(0,0,0,0.5); background-color: lightgrey; opacity: 0.6">
                    <div class="px-1"><strong>Message</strong></div>
                    <input oninput="handleChangeMessage(this)" style="background-color: transparent;" placeholder="..." class="form-control form-control-sm" />
                </div>

                <div class="d-flex"><button class="btn text-light" style="background-color:#22394a" onclick="handleSubmit()">Send Message</button></div>
            </div>

        </div>


        <div class="text-light d-flex flex-column align-items-center justify-content-center">
            <div>
                <h4>C E N T R U M E</h4>
            </div>
            <div><strong>Jl. Pakujaya No.66, RT.2/RW.5, Paku Jaya, Kec. Serpong Utara, Kota Tangerang Selatan, Banten
                    15326</strong>
            </div>
            <div><strong>Phone: 0877 7177 9430 | Email: Yusufsetiadi66@gmail.com</strong></div>
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