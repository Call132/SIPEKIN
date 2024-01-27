
<div class="card col-12 mt-3">
    <div class="card-header">
        <h4>Part V – General Rating / Penilaian Keseluruhan</h4>
    </div>
    <div class="card-body">
        <label for="strengths">1. Strengths of the staff:</label>
        <textarea class="form-control mb-2" id="strengths" name="strengths" rows="3"></textarea>

        <label for="weaknesses">2. Weaknesses of the staff:</label>
        <textarea class="form-control mb-2" id="weaknesses" name="weakness" rows="3"></textarea>

        <label for="suggestions">3. Suggestions (e.g., Training required to improve weaknesses, development
            to
            optimize strengths, etc):</label>
        <textarea class="form-control mb-2" id="suggestions" name="suggestions" rows="3"></textarea>

        <div class="form-group">
            <label for="promotability">4. Promotability (optional):</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="promotability" id="promotable_now"
                    value="promotable_now">
                <label class="form-check-label mb-2" for="promotable_now">Promotable now to:</label>
                <input type="text" class="form-control" id="promotable_now_position" name="promotable_now_position">
                <label class="form-check-label mb-2" for="promotable_now_successor">Possible Successor:</label>
                <input type="text" class="form-control" id="promotable_now_successor" name="promotable_now_successor">
            </div>
            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="promotability" id="promotable_1_2_years"
                    value="promotable_1_2_years">
                <label class="form-check-label mb-2" for="promotable_1_2_years">Promotable in 1-2 years
                    to:</label>
                <input type="text" class="form-control" id="promotable_1_2_years_position"
                    name="promotable_1_2_years_position">
                <label class="form-check-label mb-2" for="promotable_1_2_years_successor">Possible
                    Successor:</label>
                <input type="text" class="form-control" id="promotable_1_2_years_successor"
                    name="promotable_1_2_years_successor">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="promotability" id="limited_to_current_position"
                    value="limited_to_current_position" >
                <label class="form-check-label mb-2" for="limited_to_current_position">Capability limited to
                    Current
                    Position</label>
                <input type="text" class="form-control" id="capability_limited_to_current_position" name="capability_limited_to_current_position">
            </div>
        </div>

    </div>
</div>
