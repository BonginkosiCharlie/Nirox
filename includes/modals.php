<!-- Add Sculpture Modal -->
<div class="modal fade" id="addSculptureModal" tabindex="-1" role="dialog" aria-labelledby="addSculptureModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addSculptureModalLabel" style="color: gray">Add Sculpture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3"  style="color: gray">
        <div class="md-form mb-4">
          <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Sculpture">
        </div>
        <div class="md-form mb-4">
            <button class="btn btn-nirox-secondary dropdown-toggle" type="button"
                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Choose Artist
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Chris Soal</a>
                <a class="dropdown-item" href="#">Nicholas Hlubi</a>
                <a class="dropdown-item" href="#">SCharlie Sheen</a>
            </div>
        </div>

        <div class="md-form mb-4">
            <input type="file" class="form-control" id="customFile" />
        </div>
        <div class="md-form mb-4">
            <textarea id="form7" class="md-textarea form-control" rows="3" placeholder="Enter materilas (Separate each material with a comma...)"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-nirox-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-nirox">Add</button>
      </div>
    </div>
  </div>
</div>

<!-- Add Exhibition Modal -->
<div class="modal fade" id="addExhibitionModal" tabindex="-1" role="dialog" aria-labelledby="addExhibitionModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addExhibitionModalLabel" style="color: gray">Add Exhibition</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3" style="color: gray">
        <div class="md-form mb-4">
            <textarea id="form7" class="md-textarea form-control" rows="5" placeholder="Describe the making of the sculpture..."></textarea>
        </div>
        <div class="md-form mb-4">
          <label for="exhibitionDate">Exhibition date:</label>
          <input type="date" id="exhibitionDate" name="exhibitionDate">
        </div>
        <div class="md-form mb-4">
            <button class="btn btn-nirox-secondary dropdown-toggle" type="button"
                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Choose Sculpture
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Living Fossil</a>
                <a class="dropdown-item" href="#">Facing the sun</a>
                <a class="dropdown-item" href="#">Pole I</a>
                <a class="dropdown-item" href="#">Waterproof Forgiveness</a>
                <a class="dropdown-item" href="#">Last Chance</a>
                <a class="dropdown-item" href="#">My life in War</a>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-nirox-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-nirox">Add</button>
      </div>
    </div>
  </div>
</div>

<!-- Add Artist Modal -->
<div class="modal fade" id="addArtistModal" tabindex="-1" role="dialog" aria-labelledby="addArtistModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addArtistModalLabel" style="color: gray">Add Artist</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3" style="color: gray">
        <div class="md-form mb-4">
          <input type="text" id="lname" class="form-control validate" placeholder="Last Name">
        </div>
        <div class="md-form mb-4">
          <input type="text" id="fname" class="form-control validate" placeholder="Fisrt Name">
        </div>
        <div class="md-form mb-4">
              <input type="radio" class="btn-check" name="options-outlined" id="residency" autocomplete="off" style="color: #bb853a" checked>
              <label class="btn btn-outline-secondary" for="residency">Residency</label>

              <input type="radio" class="btn-check" name="options-outlined" id="coveredSpace" autocomplete="off" style="color: #bb853a">
              <label class="btn btn-outline-secondary" for="coveredSpace">The covered space</label>
        </div>

        <div class="md-form mb-4">
            <label>Artist Profile image (Optional)</label>
            <input type="file" class="form-control" id="customFile" />
        </div>
        <div class="md-form mb-4">
            <textarea id="form7" class="md-textarea form-control" rows="3" placeholder="Artist's biography..."></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-nirox-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-nirox">Add</button>
      </div>
    </div>
  </div>
</div>

<!-- Add Event Modal -->
<div class="modal fade" id="addEventModal" tabindex="-1" role="dialog" aria-labelledby="addEventModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addEventModalLabel" style="color: gray">Add Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3" style="color: gray">
        <div class="md-form mb-4">
          <input type="text" id="fname" class="form-control validate" placeholder="Event name...">
        </div>
        <div class="md-form mb-4">
          <label for="eventDate">Event date:</label>
          <input type="date" id="eventDate" name="eventDate">
        </div>
        <div class="md-form mb-4">
            <fieldset>
                <legend>Ticket Price: </legend>
                <div>
                  <input type="text" id="adult" class="form-control validate" placeholder="Adult">
                </div>
                <div>
                  <input type="text" id="child" class="form-control validate" placeholder="Child (age 2 - 12)">
                </div>
            </fieldset>
        </div>
        <div class="md-form mb-4">
            <fieldset>
                <legend>Details: </legend>
                <div class="md-form mb-4">
                  <textarea id="aboutEvent" class="md-textarea form-control" rows="3" placeholder="About the event..."></textarea>
                </div>
                <div class="md-form mb-4">
                  <textarea id="disclaimer" class="md-textarea form-control" rows="3" placeholder="Disclaimer..."></textarea>
                </div>
                <div class="md-form mb-4">
                  <input type="number" id="age" class="form-control validate" placeholder="Age...">
                </div>
                <div class="md-form mb-4">
                  <input type="text" id="parking" class="form-control validate" placeholder="Parking}">
                </div>
                <div class="md-form mb-4">
                  <textarea id="prohibited" class="md-textarea form-control" rows="3" placeholder="Enter each prohibited item separated by a comma..."></textarea>
                </div>
            </fieldset>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-nirox-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-nirox">Add</button>
      </div>
    </div>
  </div>
</div>

<!-- Add Pin Modal -->
<div class="modal fade" id="addPinModal" tabindex="-1" role="dialog" aria-labelledby="addPinModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addPinModalLabel" style="color: gray">Add Marker</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3" style="color: gray">
        <div class="md-form mb-4">
          <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Latitude (decimal format)">
        </div>
        <div class="md-form mb-4">
          <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Longitude (decimal format)">
        </div>
        <div class="md-form mb-4">
            <button class="btn btn-nirox-secondary dropdown-toggle" type="button"
                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Choose Pin
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Main Parking</a>
                <a class="dropdown-item" href="#">Toilets</a>
                <a class="dropdown-item" href="#">And then there was Fire</a>
                <a class="dropdown-item" href="#">Living Fossil</a>
                <a class="dropdown-item" href="#">Facing the sun</a>
                <a class="dropdown-item" href="#">And then there was Fire</a>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-nirox-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-nirox">Add</button>
      </div>
    </div>
  </div>
</div>