<div class="lg:hidden text-lg font-medium">
    Filter
</div>
<form action="">
    <div class="form-control w-full max-w-xs">
        <label class="label">
            <span class="label-text">What is your name?</span>
            <span class="label-text-alt">Alt label</span>
        </label>
        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
        <label class="label">
            <span class="label-text-alt">Alt label</span>
            <span class="label-text-alt">Alt label</span>
        </label>
    </div>

    <div class="flex gap-4">
        <div class="form-control">
            <label class="label cursor-pointer">
                <input type="radio" name="radio-6" class="radio checked:bg-red-500" checked />
                <span class="label-text ml-2">Red pill</span>
            </label>
        </div>
        <div class="form-control">
            <label class="label cursor-pointer">
                <input type="radio" name="radio-6" class="radio checked:bg-blue-500" checked />
                <span class="label-text ml-2">Blue pill</span>
            </label>
        </div>
    </div>

    <div class="form-control w-full max-w-xs">
        <label class="label">
            <span class="label-text">Pick the best fantasy franchise</span>
            <span class="label-text-alt">Alt label</span>
        </label>
        <select class="select select-bordered">
            <option disabled selected>Pick one</option>
            <option>Star Wars</option>
            <option>Harry Potter</option>
            <option>Lord of the Rings</option>
            <option>Planet of the Apes</option>
            <option>Star Trek</option>
        </select>
        <label class="label">
            <span class="label-text-alt">Alt label</span>
            <span class="label-text-alt">Alt label</span>
        </label>
    </div>

    <button class="btn btn-primary text-white" type="submit">Terapkan</button>
</form>