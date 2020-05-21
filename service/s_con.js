
<script type="text/javascript">
								
								
						function validation_js()
							{
							
								
								if(text.value == "" )
									{
										alert('required to fill up the text fields');
										text.style.border="1px sloid #5555";
										text_error.textContent="text is required";
										text.focus();
										return false;
									}
								
									
									
							}
							
					function textVarify()
						{
							if(text.value !== "" )
									{
										text.style.border="1px solid #5E6E66";
										text_error.textContent="";
										return true;
										
									}
							
						}
							
							
</script>
