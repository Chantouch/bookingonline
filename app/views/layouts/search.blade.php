<div class="container">
    <div class="online_reservation">
        <form action="" role="form" class="form-horizontal">
            <div class="b_room">
                <div class="reservation col-lg-12">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <h5>Destination</h5>
                            <div class="book_date">
                                <label for="search"></label>
                                <input class="form-control" id="search"
                                       type="text" value="" placeholder="City, Province, Properties...">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <h5>check-in-date:</h5>
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
                            <h5>check-out-date:</h5>
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
                        <div class="col-xs-6 col-sm-3">
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
                    </div>
                    <div class="vert-offset-top-3">
                        <input type="submit" value="SEARCH" class="margin-auto btn btn-success btn-lg">
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </form>
    </div>
</div>