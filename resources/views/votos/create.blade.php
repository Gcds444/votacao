<div class="card-body" id="corpo">
    <div class="row">
        <div class="form-group col-sm-3">
            <div class="form-group">
                <label for="nome" class="required"><b>Adcionar Opção: </b></label>
                <input type="text" class="form-control" id="nome" name="nome" value="">
            </div>  
        </div>
    </div> 
    <button type="submit" class="btn btn-success">Cadastrar </button>
    <input class="form-control" type="hidden" name="enquete_id" value="{{ $enquete->id }}">
</div>