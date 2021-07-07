@extends('Frontend.master')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Learning for Kids</title>
    <link rel="icon" href="{{asset('images/icon2.jpg')}}" />
    <link rel='stylesheet'href ="{{asset('css/bootstrap.css')}}"/>
    <link rel='stylesheet'href ="{{asset('css/font-awesome.min.css')}}"/>
    <link rel='stylesheet'href ="{{asset('css/style.css')}}"/>
    <link rel='stylesheet'href="{{asset('css/media.css')}}"/>
    <link rel='stylesheet'href="{{asset('css/animate.css')}}"/>
    <link rel='stylesheet'href="{{asset('css/Questionnaire.css')}}"/>

</head>

<body>

<!-- header -->
@section('content')

    <div class="row">
        <div class="col-lg-12 col3">
            <label class="textpersonality">Personality Test</label>
        </div>
    </div>

<div class="row">
    <div class="col-lg-10 col-sm-6 col4">


    <div class="form-check form-check-inline" >  
    <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>
    <label class="form-check-label col88" for="Disagree_a_little">Disagree a little</label>
    <label class="form-check-label col88" for="Neither_agree_nor_disagree">Natural</label>
    <label class="form-check-label col88" for="Agree_a_little">Agree a little </label>
    <label class="form-check-label col88" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--1-->
    <div class="form-check form-check-inline ">
        <label class="form-check-label" for="Is_talkative">Is talkative</label> <br>

        <input class="form-check-input col88" type="radio" name="Is_talkative" id="Is_talkative" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input col88" type="radio" name="Is_talkative" id="Is_talkative" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>

        <input class="form-check-input col88" type="radio" name="Is_talkative" id="Is_talkative" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input col88" type="radio" name="Is_talkative" id="Is_talkative" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input col88" type="radio" name="Is_talkative" id="Is_talkative" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--2-->
    <div class="form-check form-check-inline">
        <label class="form-check-label" for="Tends_to_find_fault_with_others">Tends to find fault with others</label> <br>

        <input class="form-check-input" type="radio" name="Tends_to_find_fault_with_others" id="Tends_to_find_fault_with_others" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input col88" type="radio" name="Tends_to_find_fault_with_others" id="Tends_to_find_fault_with_others" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>

        <input class="form-check-input col88" type="radio" name="Tends_to_find_fault_with_others" id="Tends_to_find_fault_with_others" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input col88" type="radio" name="Tends_to_find_fault_with_others" id="Tends_to_find_fault_with_others" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input col88" type="radio" name="Tends_to_find_fault_with_others" id="Tends_to_find_fault_with_others" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--3-->
    <div class="form-check form-check-inline">
        <label class="form-check-label" for="Does_a_thorough_job">Does a thorough job</label> <br>

        <input class="form-check-input" type="radio" name="Does_a_thorough_job" id="Does_a_thorough_job" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input" type="radio" name="Does_a_thorough_job" id="Does_a_thorough_job" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>

        <input class="form-check-input" type="radio" name="Does_a_thorough_job" id="Does_a_thorough_job" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input" type="radio" name="Does_a_thorough_job" id="Does_a_thorough_job" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input" type="radio" name="Does_a_thorough_job" id="Does_a_thorough_job" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--4-->
    <div class="form-check form-check-inline">
        <label class="form-check-label" for="Is_depressed_blue">Is depressed, blue</label> <br>

        <input class="form-check-input" type="radio" name="Is_depressed_blue" id="Is_depressed_blue" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input" type="radio" name="Is_depressed_blue" id="Is_depressed_blue" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>

        <input class="form-check-input" type="radio" name="Is_depressed_blue" id="Is_depressed_blue" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input" type="radio" name="Is_depressed_blue" id="Is_depressed_blue" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input" type="radio" name="Is_depressed_blue" id="Is_depressed_blue" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--5-->
    <div class="form-check form-check-inline">
        <label class="form-check-label" for="Is_original_comes_up_with_new_ideas">Is original, comes up with new ideas</label> <br>

        <input class="form-check-input" type="radio" name="Is_original_comes_up_with_new_ideas" id="Is_original_comes_up_with_new_ideas" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input" type="radio" name="Is_original_comes_up_with_new_ideas" id="Is_original_comes_up_with_new_ideas" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>

        <input class="form-check-input" type="radio" name="Is_original_comes_up_with_new_ideas" id="Is_original_comes_up_with_new_ideas" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input" type="radio" name="Is_original_comes_up_with_new_ideas" id="Is_original_comes_up_with_new_ideas" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input" type="radio" name="Is_original_comes_up_with_new_ideas" id="Is_original_comes_up_with_new_ideas" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--6-->
    <div class="form-check form-check-inline">
        <label class="form-check-label" for="Is_reserved">Is reserved</label> <br>

        <input class="form-check-input" type="radio" name="Is_reserved" id="Is_reserved" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input" type="radio" name="Is_reserved" id="Is_reserved" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>

        <input class="form-check-input" type="radio" name="Is_reserved" id="Is_reserved" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input" type="radio" name="Is_reserved" id="Is_reserved" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input" type="radio" name="Is_reserved" id="Is_reserved" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--7-->
    <div class="form-check form-check-inline">
    <label class="form-check-label" for="Is_original_comes_up_with_new_ideas">Is original, comes up with new ideas</label> <br>

    <input class="form-check-input" type="radio" name="Is_original_comes_up_with_new_ideas" id="Is_original_comes_up_with_new_ideas" value="Strongly disagree">
    <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

    <input class="form-check-input" type="radio" name="Is_original_comes_up_with_new_ideas" id="Is_original_comes_up_with_new_ideas" value="Disagree a little">
    <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>

    <input class="form-check-input" type="radio" name="Is_original_comes_up_with_new_ideas" id="Is_original_comes_up_with_new_ideas" value="Neither agree nor disagree">
    <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

    <input class="form-check-input" type="radio" name="Is_original_comes_up_with_new_ideas" id="Is_original_comes_up_with_new_ideas" value="Agree a little">
    <label class="form-check-label" for="Agree_a_little">Agree a little </label>

    <input class="form-check-input" type="radio" name="Is_original_comes_up_with_new_ideas" id="Is_original_comes_up_with_new_ideas" value="Strongly agree">
    <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--8-->
    <div class="form-check form-check-inline">
    <label class="form-check-label" for="Can_be_somewhat_careless">Can be somewhat careless</label> <br>

    <input class="form-check-input" type="radio" name="Can_be_somewhat_careless" id="Can_be_somewhat_careless" value="Strongly disagree">
    <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

    <input class="form-check-input" type="radio" name="Can_be_somewhat_careless" id="Can_be_somewhat_careless" value="Disagree a little">
    <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>

    <input class="form-check-input" type="radio" name="Can_be_somewhat_careless" id="Can_be_somewhat_careless" value="Neither agree nor disagree">
    <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

    <input class="form-check-input" type="radio" name="Can_be_somewhat_careless" id="Can_be_somewhat_careless" value="Agree a little">
    <label class="form-check-label" for="Agree_a_little">Agree a little </label>

    <input class="form-check-input" type="radio" name="Can_be_somewhat_careless" id="Can_be_somewhat_careless" value="Strongly agree">
    <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--9-->
    <div class="form-check form-check-inline">
    <label class="form-check-label" for="Is_relaxed_handles_stress_well">Is relaxed, handles stress well</label> <br>

    <input class="form-check-input" type="radio" name="Is_relaxed_handles_stress_well" id="Is_relaxed_handles_stress_well" value="Strongly disagree">
    <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

    <input class="form-check-input" type="radio" name="Is_relaxed_handles_stress_well" id="Is_relaxed_handles_stress_well" value="Disagree a little">
    <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>

    <input class="form-check-input" type="radio" name="Is_relaxed_handles_stress_well" id="Is_relaxed_handles_stress_well" value="Neither agree nor disagree">
    <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

    <input class="form-check-input" type="radio" name="Is_relaxed_handles_stress_well" id="Is_relaxed_handles_stress_well" value="Agree a little">
    <label class="form-check-label" for="Agree_a_little">Agree a little </label>

    <input class="form-check-input" type="radio" name="Is_relaxed_handles_stress_well" id="Is_relaxed_handles_stress_well" value="Strongly agree">
    <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--10-->
    <div class="form-check-inline">
    <label class="form-check-label" for="Is_curious_about_many_different_things">Is curious about many different things</label> <br>

    <input class="form-check-input" type="radio" name="Is_relaxed_handles_stress_well" id="Is_relaxed_handles_stress_well" value="Strongly disagree">
    <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

    <input class="form-check-input" type="radio" name="Is_relaxed_handles_stress_well" id="Is_relaxed_handles_stress_well" value="Disagree a little">
    <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                    <input class="form-check-input" type="radio" name="Is_relaxed_handles_stress_well" id="Is_relaxed_handles_stress_well" value="Neither agree nor disagree">
    <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

    <input class="form-check-input" type="radio" name="Is_relaxed_handles_stress_well" id="Is_relaxed_handles_stress_well" value="Agree a little">
    <label class="form-check-label" for="Agree_a_little">Agree a little </label>

    <input class="form-check-input" type="radio" name="Is_relaxed_handles_stress_well" id="Is_relaxed_handles_stress_well" value="Strongly agree">
    <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--11-->
    <div class="form-check-inline">
        <label class="form-check-label" for="Is_curious_about_many_different_things">Is curious about many different things</label> <br>

        <input class="form-check-input" type="radio" name="Is_curious_about_many_different_things" id="Is_curious_about_many_different_things" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input" type="radio" name="Is_curious_about_many_different_things" id="Is_curious_about_many_different_things" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                        <input class="form-check-input" type="radio" name="Is_curious_about_many_different_things" id="Is_curious_about_many_different_things" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input" type="radio" name="Is_curious_about_many_different_things" id="Is_curious_about_many_different_things" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input" type="radio" name="Is_curious_about_many_different_things" id="Is_curious_about_many_different_things" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--12-->
    <div class="form-check-inline">
        <label class="form-check-label" for="Is_full_of_energy">Is full of energy</label> <br>

        <input class="form-check-input" type="radio" name="Is_full_of_energy" id="Is_full_of_energy" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input" type="radio" name="Is_full_of_energy" id="Is_full_of_energy" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Is_full_of_energy" id="Is_full_of_energy" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input" type="radio" name="Is_full_of_energy" id="Is_full_of_energy" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input" type="radio" name="Is_full_of_energy" id="Is_full_of_energy" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--13-->
    <div class="form-check-inline">
        <label class="form-check-label" for="Starts_quarrels_with_others">Starts quarrels with others</label> <br>

        <input class="form-check-input" type="radio" name="Starts_quarrels_with_others" id="Starts_quarrels_with_others" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input" type="radio" name="Starts_quarrels_with_others" id="Starts_quarrels_with_others" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Starts_quarrels_with_others" id="Starts_quarrels_with_others" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input" type="radio" name="Starts_quarrels_with_others" id="Starts_quarrels_with_others" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input" type="radio" name="Starts_quarrels_with_others" id="Starts_quarrels_with_others" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--14-->
    <div class="form-check-inline">
        <label class="form-check-label" for="Is_a_reliable_worker">Is a reliable worker</label> <br>

        <input class="form-check-input" type="radio" name="Is_a_reliable_worker" id="Is_a_reliable_worker" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input" type="radio" name="Is_a_reliable_worker" id="Is_a_reliable_worker" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                        <input class="form-check-input" type="radio" name="Is_a_reliable_worker" id="Is_a_reliable_worker" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input" type="radio" name="Is_a_reliable_worker" id="Is_a_reliable_worker" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input" type="radio" name="Is_a_reliable_worker" id="Is_a_reliable_worker" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--15-->
    <div class="form-check-inline">
        <label class="form-check-label" for="Can_be_tense">Can be tense</label> <br>

        <input class="form-check-input" type="radio" name="Can_be_tense" id="Can_be_tense" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input" type="radio" name="Can_be_tense" id="Can_be_tense" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                        <input class="form-check-input" type="radio" name="Can_be_tense" id="Can_be_tense" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input" type="radio" name="Can_be_tense" id="Can_be_tense" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input" type="radio" name="Can_be_tense" id="Can_be_tense" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--16-->
    <div class="form-check-inline">
        <label class="form-check-label" for="Is_ingenious_a_deep_thinker">Is ingenious, a deep thinker</label> <br>

        <input class="form-check-input" type="radio" name="Is_ingenious_a_deep_thinker" id="Is_ingenious_a_deep_thinker" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input" type="radio" name="Is_ingenious_a_deep_thinker" id="Is_ingenious_a_deep_thinker" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                        <input class="form-check-input" type="radio" name="Is_ingenious_a_deep_thinker" id="Is_ingenious_a_deep_thinker" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input" type="radio" name="Is_ingenious_a_deep_thinker" id="Is_ingenious_a_deep_thinker" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input" type="radio" name="Is_ingenious_a_deep_thinker" id="Is_ingenious_a_deep_thinker" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--17-->
    <div class="form-check-inline">
        <label class="form-check-label" for="Generates_a_lot_of_enthusiasm">Generates a lot of enthusiasm</label> <br>

        <input class="form-check-input" type="radio" name="Generates_a_lot_of_enthusiasm" id="Generates_a_lot_of_enthusiasm" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input" type="radio" name="Generates_a_lot_of_enthusiasm" id="Generates_a_lot_of_enthusiasm" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                        <input class="form-check-input" type="radio" name="Generates_a_lot_of_enthusiasm" id="Generates_a_lot_of_enthusiasm" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input" type="radio" name="Generates_a_lot_of_enthusiasm" id="Generates_a_lot_of_enthusiasm" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input" type="radio" name="Generates_a_lot_of_enthusiasm" id="Generates_a_lot_of_enthusiasm" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--18-->
    <div class="form-check-inline">
        <label class="form-check-label" for="Has_a_forgiving_nature">Has a forgiving nature</label> <br>

        <input class="form-check-input" type="radio" name="Has_a_forgiving_nature" id="Has_a_forgiving_nature" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input" type="radio" name="Has_a_forgiving_nature" id="Has_a_forgiving_nature" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                        <input class="form-check-input" type="radio" name="Has_a_forgiving_nature" id="Has_a_forgiving_nature" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input" type="radio" name="Has_a_forgiving_nature" id="Has_a_forgiving_nature" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input" type="radio" name="Has_a_forgiving_nature" id="Has_a_forgiving_nature" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--19-->
    <div class="form-check-inline">
        <label class="form-check-label" for="Tends_to_be_disorganized">Tends to be disorganized</label> <br>

        <input class="form-check-input" type="radio" name="Tends_to_be_disorganized" id="Tends_to_be_disorganized" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input" type="radio" name="Tends_to_be_disorganized" id="Tends_to_be_disorganized" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                        <input class="form-check-input" type="radio" name="Tends_to_be_disorganized" id="Tends_to_be_disorganized" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input" type="radio" name="Tends_to_be_disorganized" id="Tends_to_be_disorganized" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input" type="radio" name="Tends_to_be_disorganized" id="Tends_to_be_disorganized" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--20-->
    <div class="form-check-inline">
        <label class="form-check-label" for="Worries_a_lot">Worries a lot</label> <br>

        <input class="form-check-input" type="radio" name="Worries_a_lot" id="Worries_a_lot" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input" type="radio" name="Worries_a_lot" id="Worries_a_lot" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                        <input class="form-check-input" type="radio" name="Worries_a_lot" id="Worries_a_lot" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input" type="radio" name="Worries_a_lot" id="Worries_a_lot" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input" type="radio" name="Worries_a_lot" id="Worries_a_lot" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--21-->
    <div class="form-check-inline">
        <label class="form-check-label" for="Has_an_active_imagination">Has an active imagination</label> <br>

        <input class="form-check-input" type="radio" name="Has_an_active_imagination" id="Has_an_active_imagination" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input" type="radio" name="Has_an_active_imagination" id="Has_an_active_imagination" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                        <input class="form-check-input" type="radio" name="Has_an_active_imagination" id="Has_an_active_imagination" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input" type="radio" name="Has_an_active_imagination" id="Has_an_active_imagination" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input" type="radio" name="Has_an_active_imagination" id="Has_an_active_imagination" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

    <!--22-->
    <div class="form-check-inline">
        <label class="form-check-label" for="Tends_to_be_quiet">Tends to be quiet</label> <br>

        <input class="form-check-input" type="radio" name="Tends_to_be_quiet" id="Tends_to_be_quiet" value="Strongly disagree">
        <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

        <input class="form-check-input" type="radio" name="Tends_to_be_quiet" id="Tends_to_be_quiet" value="Disagree a little">
        <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                        <input class="form-check-input" type="radio" name="Tends_to_be_quiet" id="Tends_to_be_quiet" value="Neither agree nor disagree">
        <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

        <input class="form-check-input" type="radio" name="Tends_to_be_quiet" id="Tends_to_be_quiet" value="Agree a little">
        <label class="form-check-label" for="Agree_a_little">Agree a little </label>

        <input class="form-check-input" type="radio" name="Tends_to_be_quiet" id="Tends_to_be_quiet" value="Strongly agree">
        <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
    </div>

        <!--23-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Is_generally_trusting">Is generally trusting</label> <br>

            <input class="form-check-input" type="radio" name="Is_generally_trusting" id="Is_generally_trusting" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Is_generally_trusting" id="Is_generally_trusting" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Is_generally_trusting" id="Is_generally_trusting" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Is_generally_trusting" id="Is_generally_trusting" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Is_generally_trusting" id="Is_generally_trusting" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

    <!--24-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Tends_to_be_lazy">Tends to be lazy</label> <br>

            <input class="form-check-input" type="radio" name="Tends_to_be_lazy" id="Tends_to_be_lazy" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Tends_to_be_lazy" id="Tends_to_be_lazy" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Tends_to_be_lazy" id="Tends_to_be_lazy" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Tends_to_be_lazy" id="Tends_to_be_lazy" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Tends_to_be_lazy" id="Tends_to_be_lazy" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--25-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Is_emotionally_stable_not_easily_upset">Is emotionally stable, not easily upset</label> <br>

            <input class="form-check-input" type="radio" name="Is_emotionally_stable_not_easily_upset" id="Is_emotionally_stable_not_easily_upset" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Is_emotionally_stable_not_easily_upset" id="Is_emotionally_stable_not_easily_upset" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Is_emotionally_stable_not_easily_upset" id="Is_emotionally_stable_not_easily_upset" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Is_emotionally_stable_not_easily_upset" id="Is_emotionally_stable_not_easily_upset" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Is_emotionally_stable_not_easily_upset" id="Is_emotionally_stable_not_easily_upset" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--26-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Is_inventive">Is inventive</label> <br>

            <input class="form-check-input" type="radio" name="Is_inventive" id="Is_inventive" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Is_inventive" id="Is_inventive" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                                <input class="form-check-input" type="radio" name="Is_inventive" id="Is_inventive" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Is_inventive" id="Is_inventive" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Is_inventive" id="Is_inventive" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--27-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Has_an_assertive_personality">Has an assertive personality</label> <br>

            <input class="form-check-input" type="radio" name="Has_an_assertive_personality" id="Has_an_assertive_personality" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Has_an_assertive_personality" id="Has_an_assertive_personality" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                                <input class="form-check-input" type="radio" name="Has_an_assertive_personality" id="Has_an_assertive_personality" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Has_an_assertive_personality" id="Has_an_assertive_personality" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Has_an_assertive_personality" id="Has_an_assertive_personality" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--28-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Can_be_cold_and_aloof">Can be cold and aloof</label> <br>

            <input class="form-check-input" type="radio" name="Can_be_cold_and_aloof" id="Can_be_cold_and_aloof" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Can_be_cold_and_aloof" id="Can_be_cold_and_aloof" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                                <input class="form-check-input" type="radio" name="Can_be_cold_and_aloof" id="Can_be_cold_and_aloof" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Can_be_cold_and_aloof" id="Can_be_cold_and_aloof" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Can_be_cold_and_aloof" id="Can_be_cold_and_aloof" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--29-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Perseveres_until_the_task_is_finished">Perseveres until the task is finished</label> <br>

            <input class="form-check-input" type="radio" name="Perseveres_until_the_task_is_finished" id="Perseveres_until_the_task_is_finished" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Perseveres_until_the_task_is_finished" id="Perseveres_until_the_task_is_finished" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                                <input class="form-check-input" type="radio" name="Perseveres_until_the_task_is_finished" id="Perseveres_until_the_task_is_finished" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Perseveres_until_the_task_is_finished" id="Perseveres_until_the_task_is_finished" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Perseveres_until_the_task_is_finished" id="Perseveres_until_the_task_is_finished" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--30-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Can_be_moody">Can be moody</label> <br>

            <input class="form-check-input" type="radio" name="Can_be_moody" id="Can_be_moody" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Can_be_moody" id="Can_be_moody" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Can_be_moody" id="Can_be_moody" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Can_be_moody" id="Can_be_moody" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Can_be_moody" id="Can_be_moody" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--31-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Values_artistic_aesthetic_experiences">Values artistic, aesthetic experiences</label> <br>

            <input class="form-check-input" type="radio" name="Values_artistic_aesthetic_experiences" id="Values_artistic_aesthetic_experiences" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Values_artistic_aesthetic_experiences" id="Values_artistic_aesthetic_experiences" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Values_artistic_aesthetic_experiences" id="Values_artistic_aesthetic_experiences" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Values_artistic_aesthetic_experiences" id="Values_artistic_aesthetic_experiences" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Values_artistic_aesthetic_experiences" id="Values_artistic_aesthetic_experiences" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--32-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Is_sometimes_shy_inhibited">Is sometimes shy, inhibited</label> <br>

            <input class="form-check-input" type="radio" name="Is_sometimes_shy_inhibited" id="Is_sometimes_shy_inhibited" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Is_sometimes_shy_inhibited" id="Is_sometimes_shy_inhibited" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Is_sometimes_shy_inhibited" id="Is_sometimes_shy_inhibited" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Is_sometimes_shy_inhibited" id="Is_sometimes_shy_inhibited" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Is_sometimes_shy_inhibited" id="Is_sometimes_shy_inhibited" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--33-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Is_considerate_and_kind_to_almost_everyone">Is considerate and kind to almost everyone</label> <br>

            <input class="form-check-input" type="radio" name="Is_considerate_and_kind_to_almost_everyone" id="Is_considerate_and_kind_to_almost_everyone" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Is_considerate_and_kind_to_almost_everyone" id="Is_considerate_and_kind_to_almost_everyone" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Is_considerate_and_kind_to_almost_everyone" id="Is_considerate_and_kind_to_almost_everyone" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Is_considerate_and_kind_to_almost_everyone" id="Is_considerate_and_kind_to_almost_everyone" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Is_considerate_and_kind_to_almost_everyone" id="Is_considerate_and_kind_to_almost_everyone" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--34-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Does_things_efficiently">Does things efficiently</label> <br>

            <input class="form-check-input" type="radio" name="Does_things_efficiently" id="Does_things_efficiently" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Does_things_efficiently" id="Does_things_efficiently" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Does_things_efficiently" id="Does_things_efficiently" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Does_things_efficiently" id="Does_things_efficiently" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Does_things_efficiently" id="Does_things_efficiently" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--35-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Remains_calm_in_tense_situations">Remains calm in tense situations</label> <br>

            <input class="form-check-input" type="radio" name="Remains_calm_in_tense_situations" id="Remains_calm_in_tense_situations" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Remains_calm_in_tense_situations" id="Remains_calm_in_tense_situations" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Remains_calm_in_tense_situations" id="Remains_calm_in_tense_situations" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Remains_calm_in_tense_situations" id="Remains_calm_in_tense_situations" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Remains_calm_in_tense_situations" id="Remains_calm_in_tense_situations" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--36-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Prefers_work_that_is_routine">Prefers work that is routine</label> <br>

            <input class="form-check-input" type="radio" name="Prefers_work_that_is_routine" id="Prefers_work_that_is_routine" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Prefers_work_that_is_routine" id="Prefers_work_that_is_routine" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Prefers_work_that_is_routine" id="Prefers_work_that_is_routine" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Prefers_work_that_is_routine" id="Prefers_work_that_is_routine" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Prefers_work_that_is_routine" id="Prefers_work_that_is_routine" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--37-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Is_outgoing_sociable">Is outgoing, sociable</label> <br>

            <input class="form-check-input" type="radio" name="Is_outgoing_sociable" id="Is_outgoing_sociable" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Is_outgoing_sociable" id="Is_outgoing_sociable" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Is_outgoing_sociable" id="Is_outgoing_sociable" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Is_outgoing_sociable" id="Is_outgoing_sociable" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Is_outgoing_sociable" id="Is_outgoing_sociable" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--38-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Is_sometimes_rude_to_others">Is sometimes rude to others</label> <br>

            <input class="form-check-input" type="radio" name="Is_sometimes_rude_to_others" id="Is_sometimes_rude_to_others" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Is_sometimes_rude_to_others" id="Is_sometimes_rude_to_others" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Is_sometimes_rude_to_others" id="Is_sometimes_rude_to_others" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Is_sometimes_rude_to_others" id="Is_sometimes_rude_to_others" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Is_sometimes_rude_to_others" id="Is_sometimes_rude_to_others" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--39-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Makes_plans_and_follows_through_with_them">Makes plans and follows through with them</label> <br>

            <input class="form-check-input" type="radio" name="Makes_plans_and_follows_through_with_them" id="Makes_plans_and_follows_through_with_them" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Makes_plans_and_follows_through_with_them" id="Makes_plans_and_follows_through_with_them" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Makes_plans_and_follows_through_with_them" id="Makes_plans_and_follows_through_with_them" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Makes_plans_and_follows_through_with_them" id="Makes_plans_and_follows_through_with_them" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Makes_plans_and_follows_through_with_them" id="Makes_plans_and_follows_through_with_them" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--40-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Gets_nervous_easily">Gets nervous easily</label> <br>

            <input class="form-check-input" type="radio" name="Gets_nervous_easily" id="Gets_nervous_easily" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Gets_nervous_easily" id="Gets_nervous_easily" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Gets_nervous_easily" id="Gets_nervous_easily" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Gets_nervous_easily" id="Gets_nervous_easily" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Gets_nervous_easily" id="Gets_nervous_easily" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--41-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Likes_to_reflect_play_with_ideas">Likes to reflect, play with ideas</label> <br>

            <input class="form-check-input" type="radio" name="Likes_to_reflect_play_with_ideas" id="Likes_to_reflect_play_with_ideas" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Likes_to_reflect_play_with_ideas" id="Likes_to_reflect_play_with_ideas" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Likes_to_reflect_play_with_ideas" id="Likes_to_reflect_play_with_ideas" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Likes_to_reflect_play_with_ideas" id="Likes_to_reflect_play_with_ideas" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Likes_to_reflect_play_with_ideas" id="Likes_to_reflect_play_with_ideas" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--42-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Has_few_artistic_interests">Has few artistic interests</label> <br>

            <input class="form-check-input" type="radio" name="Has_few_artistic_interests" id="Has_few_artistic_interests" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Has_few_artistic_interests" id="Has_few_artistic_interests" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Has_few_artistic_interests" id="Has_few_artistic_interests" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Has_few_artistic_interests" id="Has_few_artistic_interests" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Has_few_artistic_interests" id="Has_few_artistic_interests" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

            <!--43-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Likes_to_cooperate_with_others">Likes to cooperate with others</label> <br>

            <input class="form-check-input" type="radio" name="Likes_to_cooperate_with_others" id="Likes_to_cooperate_with_others" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Likes_to_cooperate_with_others" id="Likes_to_cooperate_with_others" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Likes_to_cooperate_with_others" id="Likes_to_cooperate_with_others" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Likes_to_cooperate_with_others" id="Likes_to_cooperate_with_others" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Likes_to_cooperate_with_others" id="Likes_to_cooperate_with_others" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

            <!--44-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Is_easily_distracted">Is easily distracted</label> <br>

            <input class="form-check-input" type="radio" name="Is_easily_distracted" id="Is_easily_distracted" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Is_easily_distracted" id="Is_easily_distracted" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Is_easily_distracted" id="Is_easily_distracted" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Is_easily_distracted" id="Is_easily_distracted" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Is_easily_distracted" id="Is_easily_distracted" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

        <!--45-->
        <div class="form-check-inline">
            <label class="form-check-label" for="Is_sophisticated_in_art_music_or_literature">Is sophisticated in art, music, or literature</label> <br>

            <input class="form-check-input" type="radio" name="Is_sophisticated_in_art_music_or_literature" id="Is_sophisticated_in_art_music_or_literature" value="Strongly disagree">
            <label class="form-check-label" for="Strongly_disagree">Strongly disagree</label>

            <input class="form-check-input" type="radio" name="Is_sophisticated_in_art_music_or_literature" id="Is_sophisticated_in_art_music_or_literature" value="Disagree a little">
            <label class="form-check-label" for="Disagree_a_little">Disagree a little</label>
                            <input class="form-check-input" type="radio" name="Is_sophisticated_in_art_music_or_literature" id="Is_sophisticated_in_art_music_or_literature" value="Neither agree nor disagree">
            <label class="form-check-label" for="Neither_agree_nor_disagree">Neither agree nor disagree</label>

            <input class="form-check-input" type="radio" name="Is_sophisticated_in_art_music_or_literature" id="Is_sophisticated_in_art_music_or_literature" value="Agree a little">
            <label class="form-check-label" for="Agree_a_little">Agree a little </label>

            <input class="form-check-input" type="radio" name="Is_sophisticated_in_art_music_or_literature" id="Is_sophisticated_in_art_music_or_literature" value="Strongly agree">
            <label class="form-check-label" for="Strongly_agree">Strongly agree</label>
        </div>

    </div>
</div>



<div class="row">
    <div class="col-lg-12 col-sm-6 col11">
        <button type="button" class="btn btn-danger">Cancel</button>
        <button type="button" class="btn btn-success">Submit</button>
    </div>
</div>
@endsection
<!-- Footer -->
<!--End Loading Screen-->
         
<script>

</script>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script>new WOW().init();</script>



</body>
</html>


