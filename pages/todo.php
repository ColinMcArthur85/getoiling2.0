
                     <!-- To Do Card -->
                     <div class="card-header flex-row-between">
                        <h2>To Do For</h2>
                        <button id="toDoModalbtn">Add</button>
                        <div id="overlay" class="overlay"></div>


                        <div id="toDoModal" class="modal">
                           <div class="modal-content">
                              <div class="flex-row-end">
                                 <span class="close">&times;</span>
                              </div>
                              <!-- ADD TO DO Field -->
                              <div class="flex-col-between">
                              <div class="flex-row-between">
                                 <div class="flex-col-between">
                                    <label for="newTodo">ADD TO DO</label>
                                    <input type="text" id="newTodo" placeholder="send product sample">
                                 </div>
                                 <div class="flex-col-between">
                                    <label for="dueDate">DUE (OPTIONAL)</label>
                                    <input type="date" id="dueDate" value="2023-10-09">
                                 </div>
                              </div>
                              <!-- FOR Field -->
                              <div class="flex-row-between">
                                 <div class="flex-col-between">
                                 <label for="contactSelect">FOR</label>
                                 <select id="contactSelect">
                                    <option value="contactName">Contact Name</option>
                                    <option value="company">Company</option>
                                    <option value="email">Email</option>
                                    <option value="phone">Phone</option>
                                 </select>
                                 </div>
                                 </div>
                                 <button id="addNoteBtn" onclick="toggleNote()">Add note</button>
                                 <textarea id="noteArea" style="display:none;"></textarea>
                              
                              <!-- Checkbox for Coaching Activity -->
                              <div>
                                 <input type="checkbox" id="coachingCheckbox">
                                 <label for="coachingCheckbox">THIS IS A COACHING ACTIVITY</label>
                              </div>
                              <!-- Add To Do Button -->
                              <button id="addToDoBtn">Add To Do</button>
                              </div>
                           </div>
                        </div>

                     </div>
                  