<!DOCTYPE html>
<html>

<head>
    @include('bootstrapheaders')
    @include('nav')

</head>

<body>
    <div style="background-color:darkblue">
        <div class="container">
            <h4 class="text-light">Our Projects</h4>
            <div class="d-flex flex-wrap">
                @for ($i = 0; $i < count($data['projects']); $i++) <div class="m-4">
                    <div class="item-photo" style=" background-color: grey; color: white;width: 25vw; height: 20vh;">
                        <img style="max-width: 100%" src="/api/projects/{{ $data['projects'][$i]?->id }}/photo" />
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center bg-light">
                        <div>
                            <strong>Project: {{ $data['projects'][$i]?->name }}</strong>
                        </div>
                        <div>
                            <strong>Location: {{ $data['projects'][$i]?->location }}</strong>
                        </div>
                        <div>
                            <strong>Mat: {{ $data['projects'][$i]?->material }}</strong>
                        </div>

                    </div>

            </div>
            @endfor
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