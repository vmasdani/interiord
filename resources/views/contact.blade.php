<!DOCTYPE html>
<html>

<head>
    @include('bootstrapheaders')
    @include('nav')

</head>

<script>
    let name = '';
    let email = '';
    let phone = '';
    let message = '';


    const handleChangeName = (e) => {
        name = e.value
    }
    const handleChangeEmail = (e) => {
        email = e.value
    }
    const handleChangePhone = (e) => {
        phone = e.value
    }
    const handleChangeMessage = (e) => {
        message = e.value
    }
    const handleSubmit = (e) => {
        const adminSetting = JSON.parse(document.getElementById('data').value)
        const text = `Halo, saya ${name}.
${email !== '' ? `(Email: ${email})`:``}
${phone !== '' ? `(Telepon: ${phone})`:``}
${message}`;
        window.open(`https://wa.me/${adminSetting?.whatsapp_number??''}?text=${encodeURIComponent(text)}`, '_blank');

    }
</script>

<body>
    <div>
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

                <div class="d-flex my-1 rounded" style="background: rgba(0,0,0,0.5); background-color: lightgrey;">
                    <div class="px-1"><strong>Name</strong></div><input oninput="handleChangeName(this)" style="background-color: transparent;" placeholder="..." class="form-control form-control-sm" />
                </div>
                <div class="d-flex my-1 rounded" style="background: rgba(0,0,0,0.5); background-color: lightgrey;">
                    <div class="px-1"><strong>Email</strong></div>
                    <input oninput="handleChangeEmail(this)" style="background-color: transparent;" placeholder="..." class="form-control form-control-sm" />
                </div>

                <div class="d-flex my-1 rounded" style="background: rgba(0,0,0,0.5); background-color: lightgrey;">
                    <div class="px-1"><strong>Phone</strong></div>
                    <input oninput="handleChangePhone(this)" style="background-color: transparent;" placeholder="..." class="form-control form-control-sm" />
                </div>

                <div class="d-flex my-1 rounded" style="background: rgba(0,0,0,0.5); background-color: lightgrey;">
                    <div class="px-1"><strong>Message</strong></div>
                    <input oninput="handleChangeMessage(this)" style="background-color: transparent;" placeholder="..." class="form-control form-control-sm" />
                </div>

                <div class="d-flex"><button class="btn text-light" style="background-color:#22394a" onclick="handleSubmit()">Send Message</button></div>
            </div>

        </div>

        <div style="background-color:#22394a; position: fixed; z-index: 2; width:100%; bottom:0" class="text-light d-flex flex-column align-items-center justify-content-center">
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
        .item-photo {
            max-width: 50vw !important;
        }
    }
</style>
@include('font')