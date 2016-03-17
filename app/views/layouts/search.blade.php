<div class="container">
    <div class="online_reservation">
        {{Form::open(array('url'=>'search-hotel', 'role'=>'form','class'=>'form-horizontal'))}}
        <div class="b_room">
            <div class="reservation col-lg-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-3">
                        <h5>Destination</h5>
                        <div class="book_date">
                            <label for="search_hotel"></label>
                            {{Form::text('search_hotel', null, array('placeholder'=>'City, Province, Properties...',
                            'class'=>'form-control','id'=>'search_hotel','tabindex'=>1))}}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <h5>check-in</h5>
                        <div class="book_date">
                            <form>
                                <label for="datepicker"></label>
                                <input class="date form-control" id="datepicker"
                                       type="text"
                                       value="DD/MM/YY"
                                       onfocus="this.value = '';"
                                       onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
                            </form>
                        </div>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-xs-6 col-sm-3">
                        <h5>check-out</h5>
                        <div class="book_date">
                            <form>
                                <label for="datepicker1"></label>
                                <input class="date form-control" id="datepicker1"
                                       type="text"
                                       value="DD/MM/YY"
                                       onfocus="this.value = '';"
                                       onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-1">
                        <h5>Adults:</h5>
                        <label for="country"></label>
                        <select id="country" onchange="change_country(this.value)"
                                class="frm-field required form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>

                    <div class="col-sm-2 m-t-22">
                        {{Form::submit('Search', array('class'=>'btn btn-primary full-width vert-offset-top-1'))}}
                    </div>
                </div>

            </div>
            <div class="clear"></div>
        </div>
        {{Form::close()}}
    </div>
</div>