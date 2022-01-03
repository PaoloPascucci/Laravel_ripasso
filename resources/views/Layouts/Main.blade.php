<main>
    <div class="container-fluid wrapper">
        <div class="row">
            <div class="str">
                <div class="cacca row justify-content-evenly">
                    <div class="mb-3">
                        <label for="" class="form-label"></label>
                        <input type="text" placeholder="Inserisci nome personaggio">
                    </div>
                    @foreach($db as $index => $data)
                    <div class="card">
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
    height: 500px;
    width: 200px;
}
</style>