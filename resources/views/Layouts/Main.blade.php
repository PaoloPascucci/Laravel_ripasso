<main>
    <div class="container-fluid wrapper">
        <div class="row">
            <div class="str">
                <div class="cacca row justify-content-center align-items-center ">
                    @foreach($db as $index => $data)
                    <div class="card g-3 mx-5">
                        <img src="{{$data['image']}}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{$data['Name']}}</h4>
                            <p class="card-text">{{$data['Species']}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
<style>
.cacca {
    margin-top: 6rem;
}

.card {
    width: 220px
}

.card img {
    height: 350px;
    width: 200px;
}
</style>