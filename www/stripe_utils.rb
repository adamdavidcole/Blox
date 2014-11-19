#!/usr/bin/env ruby

require "stripe"

# Set your secret key: remember to change this to your live secret key in production
# See your keys here https://manage.stripe.com/account
Stripe.api_key = "sk_test_BQokikJOvBiI2HlWgH4olfQ2" #"sk_test_JDPtA2hSjKyCyPjgVnvvp9bh"

def save_user(user,email,token)
  # Create a Customer
  customer = Stripe::Customer.create(
    :card => token,
    :description => email
  )
  
  # Save the customer ID in your database so you can use it later
  save_stripe_customer_id(user, customer.id)
end

def charge_card(user, amount)
  # Create the charge on Stripe's servers - this will charge the user's card
  begin
    customer_id = get_stripe_customer_id(user)
    
    Stripe::Charge.create(
      :amount   => amount,
      :currency => "usd",
      :customer => customer_id
    )
  rescue Stripe::CardError => e
    # The card has been declined
  end
end

# Get the credit card details submitted by the form
#token = params[:stripeToken]

save_user("test_user", "test@test.com", "tok_104Fms2eZvKYlo2Cz1iQCJo7")
