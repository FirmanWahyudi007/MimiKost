<div class="lg:hidden text-lg font-medium">
    Filter
</div>
<div>
    {{-- Form filter --}}
    <div class="mb-2 grid grid-cols grid-cols-2 gap-4">
        <div class="form-control w-full">
            <label class="label">
                <span class="label-text">Harga Termurah</span>
            </label>
            <input type="number" placeholder="..." class="input input-bordered w-full min-harga" name="min_harga"/>
        </div>
        <div class="form-control w-full">
            <label class="label">
                <span class="label-text">Harga Termahal</span>
            </label>
            <input type="number" placeholder="..." class="input input-bordered w-full max-harga" name="max_harga"/>
        </div>
    </div>

    <button class="btn btn-primary text-white" type="button" id="filter">Terapkan</button>
</div>