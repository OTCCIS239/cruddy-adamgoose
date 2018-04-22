<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" value="{{ @$tabletop ? $tabletop->title : '' }}" class="form-control">
</div>

<div class="form-group">
    <label for="genre">Genre</label>
    <input type="text" name="genre" value="{{ @$tabletop ? $tabletop->genre : '' }}" class="form-control">
</div>

<div class="form-group">
    <label for="min_players">Min. Players</label>
    <input type="number" name="min_players" value="{{ @$tabletop ? $tabletop->min_players : '' }}" class="form-control">
</div>

<div class="form-group">
    <label for="max_players">Max. Players</label>
    <input type="number" name="max_players" value="{{ @$tabletop ? $tabletop->max_players : '' }}" class="form-control">
</div>