<script type="text/javascript">
								
								
								
								
						function validation_js()
							{
							
								
								if(fname.value == "" )
									{
										//alert('required to fill up all the fields');
										fname.style.border="1px sloid #5555";
										fname_error.textContent="full name is required";
										fname.focus();
										return false;
									}
								if(WordCount(fname.value)<2)
									{
										fname_error.textContent="full name must be contain of 2 words";
										fname.focus();
										return false;
									}
							
								
								if(email.value == "" )
									{
										//alert('required to fill up all the fields');
										email.style.border="1px solid red";
										email_error.textContent="email is required";
										email.focus();
										return false;
									}
								if(education.value == "")
									{
										education_error.textContent="email is required";
										education.focus();
										return false;
									}	
								
								if(p_password.value == "")
									{
											//alert('required to fill up all the fields');
											p_password.style.border="1px solid red";
											p_password_error.textContent="previous password is required for checking";
											p_password.focus();
											
											return false;
									}	
									
								if(WordCount2(n_password.value)<5)
												{
													alert('new password should not be less than 5 character or it will remain unchanged');
												}
											
							
							}
							
					function fnameVarify()
						{
							if(fname.value !== "" )
									{
										fname.style.border="1px solid #5E6E66";
										fname_error.textContent="";
										return true;
										
									}
							
						}
							
					function emailVarify()
						{
							if(email.value !== "" )
									{
										email.style.border="1px solid #5E6E66";
										email_error.textContent="";
										return true;
									}
							
						}
			
					function educationVarify()
						{
							if(education.value !== "" )
									{
										education.style.border="1px solid #5E6E66";
										education_error.inneHTML="";
										return true;
									}
							
						}
						function p_passwordVarify()
						{
							if(p_password.value !== "" )
									{
										p_password.style.border="1px solid #5E6E66";
										p_password_error.textContent="";
										return true;
									}
							
						}
					
										
					function WordCount(str)
									{ 
									  return str.split(" ").length;
									}					
					

					function WordCount2(str)
									{ 
									  return str.length;
									}					
					
							
</script>
