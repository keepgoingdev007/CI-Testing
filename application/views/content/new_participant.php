
    <div class="container-fluid">
        <div class="page-content">
            
            <div class="breadcrumbs">
                <h1>Deltagare</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo site_url('dashboard'); ?>">Översikt</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('participant'); ?>">Deltagare</a>
                    </li>
                    <li class="active">Skapa deltagare</li>
                </ol>
            </div>        
    
            <div class="page-content-container">
                <div class="page-content-row">
    
                    <div class="page-sidebar">
                        <nav class="navbar">    
                            <h3><i class="fa fa-tasks"></i> Alternativ</h3>
                            <ul class="nav navbar-nav margin-bottom-35">
                                <li>
                                    <a href="<?php echo base_url('participant'); ?>">
                                        <i class="fa fa-list-alt"></i> Alla deltagare
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="<?php echo base_url('participant/new_participant'); ?>">
                                        <i class="fa fa-plus "></i> Skapa deltagare 
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    
                    <div class="page-content-col">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-red-sunglo">
                                            <i class="fa fa-plus font-red-sunglo"></i>
                                            <span class="caption-subject bold uppercase"> Ny deltagare</span>
                                        </div>
                                    </div>
                                    
                                    <?php 
                                        if ($this->error_message != null)
                                        {
                                            echo '<div class="alert alert-danger alert-dismissable">
                                                    <button class="close" aria-hidden="true" data-dismiss="alert" type="button"></button>
                                                    <h4 class="alert-heading">Meddelande!</h4>
                                                    '.$this->error_message.'
                                                </div>';
                                        }
                                    ?>
                                    
                                    <div class="portlet-body form">
                                        <?php 
                                            echo form_open(base_url('participant/new_participant'), array("class" => "form-signin", "id" => "participantform", "name" => "participantform"));
                                        ?>
                                            <div class="form-body">

                                                <div class="form-group">
                                                    <label for="personalnumber">Personnummer: * </label>
                                                    <input type="text" id="personalnumber" class="form-control" name="personalnumber" placeholder="Personnummer" value="<?php echo set_value('personalnumber'); ?>" autocomplete="off" required>
                                                    <span class="text-danger"><?php echo form_error('personalnumber'); ?></span>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="checkbox" id="foreign_ssn">
                                                        <label><input type="checkbox" name="foreign_ssn" value="1">Deltagaren saknar svenskt personnummer.</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="first_name">Förnamn: *</label>
                                                    <input type="text" id="first_name" class="form-control" name="first_name" placeholder="Förnamn" value="<?php echo set_value('first_name'); ?>" autocomplete="off" required>
                                                    <span class="text-danger"><?php echo form_error('first_name'); ?></span>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="last_name">Efternamn: *</label>
                                                    <input type="text" id="last_name" class="form-control" name="last_name" placeholder="Efternamn" value="<?php echo set_value('last_name'); ?>" autocomplete="off" required>
                                                    <span class="text-danger"><?php echo form_error('last_name'); ?></span>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="company">Företag: *</label>
                                                    <select id="company" name="company" class="form-control select2" required></select>
                                                    <span class="text-danger"><?php echo form_error('company'); ?></span>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="phone">Telefon:</label>
                                                    <input type="text" id="phone" class="form-control" name="phone" placeholder="Telefon" value="<?php echo set_value('phone'); ?>" autocomplete="off">
                                                    <span class="text-danger"><?php echo form_error('phone'); ?></span>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="email">Epost:</label>
                                                    <input type="email" id="email" class="form-control" name="email" placeholder="Epost" value="<?php echo set_value('email'); ?>" autocomplete="off" >
                                                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="freetext">Anteckningar:</label>
                                                    <textarea name="freetext" id="freetext" class="form-control"><?php echo set_value('freetext');?></textarea>
                                                    <span class="text-danger"><?php echo form_error('freetext'); ?></span>
                                                </div>
                                        </div>
                                        
                                        <div class="form-actions">
                                            <a href="<?php echo site_url('participant'); ?>" class="btn red">Avbryt</a>
                                            <button type="submit" class="btn blue">Spara</button>
                                        </div>
                                        
                                    <?php echo form_close(); ?>

                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
        
    <script type="text/javascript">
        var ajax_url = '<?php echo base_url('participant/search_companies');?>';
        var base_url = '<?php echo base_url(); ?>';
    </script>