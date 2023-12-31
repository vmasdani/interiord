<!DOCTYPE html>
<html>

<head>
    @include('bootstrapheaders')
    @include('nav')

</head>

<body>
    <div>
        <input style="display: none;" id="data" value="{{ $data['projects'] }}" />
        <dialog id="main-dialog" style="min-width: 75vw">
            <div>
                <div>
                    <button class="btn btn-sm btn-danger" onclick="(() => {
                    document.getElementById('main-dialog').removeAttribute('open');
                })()">Close</button>
                </div>
                <div style="background-color:#22394a" class="p-1">
                    <div id="img-detail" class="d-flex justify-content-center"></div>
                    <div id="img-detail-photos" class="d-flex justify-content-center"></div>
                    <div class="text-light" id="project-detail">Project: </div>
                    <div class="text-light" id="location-detail">Location: </div>
                    <div class="text-light" id="material-detail">Material: </div>
                    <div class="text-light" id="area-detail">Area: </div>
                </div>


            </div>
        </dialog>
        <div style="background-color:#22394a; min-height: 100vh">
            <h4 class="text-light p-2">Our Projects</h4>
            <div style="border: 1px solid gold;"></div>
            <div class="container">


                <div class="d-flex flex-wrap">
                    @for ($i = 0; $i < count($data['projects']); $i++) <div class="m-4">
                        <div class="item-photo" style=" background-color: grey; color: white;width: 25vw; height: 20vh;">
                            <img style="max-width: 100%" src="/api/projects/{{ $data['projects'][$i]?->id }}/photo" />
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center bg-light">
                            <div class="p-1"><button class="btn btn-sm" style="background-color:#22394a; color: gold" onclick="(()=> {

                                        const d = JSON.parse (document.getElementById('data').value)
                                        const index = {{$i}};

                                        document.getElementById('main-dialog').setAttribute('open','');
                                        document.getElementById('img-detail').innerHTML= `<img style='max-width: 75vw; max-height: 50vh' src='/api/projects/{{ $data['projects'][$i]?->id }}/photo' />`;
                                        
                                        document.getElementById('img-detail-photos').innerHTML= 
                                            `<div class='d-flex'>
                                                ${d[index]?.project_photos?.map(p=>{return (
                                                    `<div class='m-2'>
                                                        <div class='item-photo' style='background-color: grey; color: white;width: 25vw; height: 20vh;'>
                                                            <img style='max-width: 100%' src='/api/project_photos/${p?.id}/photo' />
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


    @include('bootstrapjs')
</body>

</html>

<style>
    @media only screen and (min-width: 768px) {
        .item-photo {
            width: 17vw !important;
        }
    }
</style>
@include('font')
<script></script>